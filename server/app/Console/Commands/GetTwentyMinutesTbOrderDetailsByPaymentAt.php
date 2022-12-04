<?php

namespace App\Console\Commands;

use App\Constants\TbOrderStatus;
use App\Managers\DataokeManager;
use App\Managers\NotificationManager;
use App\Managers\TbOrderManager;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Cache;

class GetTwentyMinutesTbOrderDetailsByPaymentAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getTwentyMinutesTbOrderDetailsByPaymentAt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "查询20分钟内根据付款时间查询淘宝订单";

    private $positionIndex = null;
    private $hasNext = true;

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
        \Log::info('script command:getTwentyMinutesTbOrderDetailsByPaymentAt start');
        $endTime = Carbon::now()->format('Y-m-d H:i:s');
        // 每分钟拉前20分钟的实时单，根据付款时间拉取
        $startTime = Carbon::now()->subMinutes(20)->format('Y-m-d H:i:s');
        $params = [
            'startTime' => $startTime,
            'endTime' => $endTime,
            'queryType' => 2,
            'pageSize' => 100
        ];
        $messageOrders = [];
        while ($this->hasNext) {
            if ($this->positionIndex) {
                $params['positionIndex'] = $this->positionIndex;
            }
            $orderData = DataokeManager::getInstance()->getTbOrderDetails($params);
            $orders = $orderData['results']['publisher_order_dto'] ?? [];
            $this->positionIndex = $orderData['position_index'] ?? null;
            $this->hasNext = $orderData['has_next'] ?? false;
            foreach ($orders as $item) {
                $tbOrder = TbOrderManager::createOrUpdateTbOrder($item);
                $cacheKey = "tb:{$tbOrder['order_no']}";
                if ($tbOrder['payment_at'] > Carbon::now()->subMinutes(60) && !Cache::has($cacheKey)
                    && $tbOrder['order_status'] == TbOrderStatus::PAYMENT && isset($tbOrder['extract_money'])) {
                    $messageOrders[$tbOrder['order_no']][] = $tbOrder;
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
                $userId = $item['user_id'];
                $paymentMoney += $item['payment_money'];
            }
            $user = User::where('id', $userId)->first();
            NotificationManager::orderNotification($user, $title, $orderNo, $paymentMoney, $extractMoney, $count);
            $cacheKey = "tb:{$orderNo}";
            Cache::put($cacheKey, true, now()->addMinutes(120));
        }
        \Log::info('script command:getTwentyMinutesTbOrderDetailsByPaymentAt end');
    }
}
