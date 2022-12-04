<?php

namespace App\Console\Commands;

use App\Managers\DataokeManager;
use App\Managers\TbOrderManager;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GetTenDayTbOrderDetailsByPaymentAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getTenDayTbOrderDetailsByPaymentAt';

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
        \Log::info('script command:getTenDayTbOrderDetailsByPaymentAt start');
        $currentTime = Carbon::today();
        $endTime = $currentTime->copy();
        $startTime = $currentTime->copy()->subDay(10);
        // 拉取前10天的订单，按付款时间拉取（从第一天的00:00-03:00一直到第十天的21:00-24:00，相当于一天的订单至少要请求8次，10天这里就是至少80次
        while ($startTime->copy()->format('Y-m-d H:i:s') < $endTime->format('Y-m-d H:i:s')) {
            $gapMin = 180;
            // 特定日期
            if ($startTime > '2021-12-12' &&  $startTime < '2021-12-13') {
                $gapMin = 20;
            }
            $end = $startTime->copy()->addMinutes($gapMin);
            $params = [
                'startTime' => $startTime->format('Y-m-d H:i:s'),
                'endTime' => $end->copy()->format('Y-m-d H:i:s'),
                'queryType' => 2,
                'pageSize' => 100
            ];
            $hasNext = true;
            $positionIndex = null;
            $orderCount = 0;
            while ($hasNext) {
                if ($positionIndex) {
                    $params['positionIndex'] = $positionIndex;
                }
                $orderData = DataokeManager::getInstance()->getTbOrderDetails($params);
                $orders = $orderData['results']['publisher_order_dto'] ?? [];
                $orderCount += count($orders);
                $positionIndex = $orderData['position_index'] ?? null;
                $hasNext = $orderData['has_next'] ?? false;
                foreach ($orders as $item) {
                    TbOrderManager::createOrUpdateTbOrder($item);
                }
            }
            $startTime = $end;
        }
        \Log::info('script command:getTenDayTbOrderDetailsByPaymentAt end');
    }
}
