<?php

namespace App\Console\Commands;

use App\Managers\DataokeManager;
use App\Managers\JdOrderManager;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GetTenDayJdOrderDetailsByPaymentAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getTenDayJdOrderDetailsByPaymentAt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "拉取前10天的订单，按付款时间拉取";

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
        \Log::info('script command:getTenDayJdOrderDetailsByPaymentAt start');
        $currentTime = Carbon::today();
        $endTime = $currentTime->copy();
        $startTime = $currentTime->copy()->subDay(10);
        $gapMin = 60;
        // 拉取前10天的订单，按付款时间拉取（从第一天的00:00-03:00一直到第十天的21:00-24:00，相当于一天的订单至少要请求8次，10天这里就是至少80次
        while ($startTime->copy()->format('Y-m-d H:i:s') < $endTime->format('Y-m-d H:i:s')) {
            $end = $startTime->copy()->addMinutes($gapMin);
            $pageSize = 100;
            $params = [
                'pageSize' => $pageSize,
                'type' => 1,
                'startTime' => $startTime->format('Y-m-d H:i:s'),
                'endTime' => $end->copy()->format('Y-m-d H:i:s'),
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
        \Log::info('script command:getTenDayJdOrderDetailsByPaymentAt end');
    }
}
