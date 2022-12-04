<?php

namespace App\Console\Commands;

use App\Managers\DataokeManager;
use App\Managers\JdOrderManager;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GetTwentyMinutesJdOrderDetailsBySettleAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getTwentyMinutesJdOrderDetailsBySettleAt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '查询20分钟内根据结算时间查询京东订单';

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
        \Log::info('script command:getTwentyMinutesJdOrderDetailsBySettleAt start');
        $endTime = Carbon::now()->format('Y-m-d H:i:s');
        // 每分钟拉前20分钟的实时单，根据结算时间拉取
        $startTime = Carbon::now()->subMinutes(20)->format('Y-m-d H:i:s');
        $pageSize = 100;
        $params = [
            'startTime' => $startTime,
            'endTime' => $endTime,
            'type' => 2,
            'pageSize' => $pageSize
        ];
        $hasNext = true;
        $page = 1;
        while ($hasNext) {
            $params['pageIndex'] = $page;
            $orders = DataokeManager::getInstance()->getJdOrderDetails($params);
            $hasNext = count($orders) >= $pageSize;
            if (!empty($orders)) {
                if ($hasNext) {
                    $page += 1;
                }
                foreach ($orders as $order) {
                    JdOrderManager::createOrUpdateJdOrder($order);
                }
            }
        }
        \Log::info('script command:getTwentyMinutesJdOrderDetailsBySettleAt end');
    }
}
