<?php

namespace App\Console\Commands;

use App\Managers\DataokeManager;
use App\Managers\JdOrderManager;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GetLastMonthJdOrderDetailsBySettleAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getLastMonthJdOrderDetailsBySettleAt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '拉取上月结算订单';

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
        \Log::info('script command:getLastMonthJdOrderDetailsBySettleAt start');
        $endTime = Carbon::today()->firstOfMonth();
        $startTime = Carbon::today()->subMonth()->firstOfMonth();
        $gapMin = 60;
        while ($startTime->copy()->format('Y-m-d H:i:s') < $endTime->format('Y-m-d H:i:s')) {
            $end = $startTime->copy()->addMinutes($gapMin);
            $pageSize = 100;
            $params = [
                'startTime' => $startTime->format('Y-m-d H:i:s'),
                'endTime' => $end->copy()->format('Y-m-d H:i:s'),
                'type' => 2,
                'pageSize' => $pageSize
            ];
            $page = 1;
            $hasNext = true;
            $orderCount = 0;
            while ($hasNext) {
                $params['pageIndex'] = $page;
                $orders = DataokeManager::getInstance()->getJdOrderDetails($params);
                $hasNext = count($orders) >= $pageSize;
                if (!empty($orders)) {
                    if ($hasNext) {
                        $page += 1;
                    }
                    $orderCount += count($orders);
                    foreach ($orders as $order) {
                        JdOrderManager::createOrUpdateJdOrder($order);
                    }
                }
            }
            $startTime = $end;
        }
        \Log::info('script command:getLastMonthJdOrderDetailsBySettleAt end');
    }
}
