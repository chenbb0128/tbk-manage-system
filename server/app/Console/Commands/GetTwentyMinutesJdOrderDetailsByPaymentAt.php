<?php

namespace App\Console\Commands;

use App\Constants\JdOrderStatus;
use App\Managers\DataokeManager;
use App\Managers\JdOrderManager;
use App\Managers\NotificationManager;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Cache;

class GetTwentyMinutesJdOrderDetailsByPaymentAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getTwentyMinutesJdOrderDetailsByPaymentAt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "查询20分钟内根据付款时间查询京东订单";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \Log::info('script command:getTwentyMinutesJdOrderDetailsByPaymentAt start');
        $endTime = Carbon::now()->format('Y-m-d H:i:s');
        // 每分钟拉前20分钟的实时单，根据付款时间拉取
        $startTime = Carbon::now()->subMinutes(20)->format('Y-m-d H:i:s');
        $pageSize = 100;
        $params = [
            'pageSize' => $pageSize,
            'type' => 1,
            'startTime' => $startTime,
            'endTime' => $endTime,
        ];
        $hasNext = true;
        $page = 1;
        $messageOrders = [];
        while ($hasNext) {
            $params['pageIndex'] = $page;
            $orders = DataokeManager::getInstance()->getJdOrderDetails($params);
            $hasNext = count($orders) >= $pageSize;
            if (!empty($orders)) {
                if ($hasNext) {
                    $page += 1;
                }
                foreach ($orders as $order) {
                    $jdOrder = JdOrderManager::createOrUpdateJdOrder($order);
                    $cacheKey = "jd:{$jdOrder['order_no']}";
                    if ($jdOrder['order_created_at'] > Carbon::now()->subMinutes(60) && !Cache::has($cacheKey)
                        && $jdOrder['order_status'] == JdOrderStatus::PAYMENT && isset($jdOrder['extract_money'])) {
                        $messageOrders[$jdOrder['order_no']][] = $jdOrder;
                    }
                }
            }
        }
        foreach ($messageOrders ?: [] as $orderNo => $messageOrder) {
            $title = '';
            $count = count($messageOrder);
            $extractMoney = 0;
            $userId = 0;
            $paymentMoney = 0;
            foreach ($messageOrder as $item) {
                $title .= mb_substr($item['goods_name'], 0, 20) . "...\n";
                $extractMoney += $item['extract_money'];
                $userId = $item['position_id'];
                $paymentMoney += $item['estimate_cos_price'];
            }
            $user = User::where('id', $userId)->first();
            NotificationManager::orderNotification($user, $title, $orderNo, $paymentMoney, $extractMoney, $count);
            $cacheKey = "jd:{$orderNo}";
            Cache::put($cacheKey, true, now()->addMinutes(120));
        }
        \Log::info('script command:getTwentyMinutesJdOrderDetailsByPaymentAt end');
    }
}
