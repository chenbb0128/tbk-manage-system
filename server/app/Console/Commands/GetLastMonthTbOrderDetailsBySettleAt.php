<?php

namespace App\Console\Commands;

use App\Managers\DataokeManager;
use App\Managers\TbOrderManager;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GetLastMonthTbOrderDetailsBySettleAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getLastMonthTbOrderDetailsBySettleAt';

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
        \Log::info('script command:getLastMonthTbOrderDetailsBySettleAt start');
        $endTime = Carbon::today()->firstOfMonth();
        $startTime = Carbon::today()->subMonth()->firstOfMonth();
        $gapMin = 180;
        while ($startTime->copy()->format('Y-m-d H:i:s') < $endTime->format('Y-m-d H:i:s')) {
            // 特定日期
            if (($startTime > '2021-11-11' &&  $startTime < '2021-11-12') || ($startTime > '2021-12-12' &&  $startTime < '2021-12-13')) {
                $gapMin = 20;
            }
            $end = $startTime->copy()->addMinutes($gapMin);
            $params = [
                'startTime' => $startTime->format('Y-m-d H:i:s'),
                'endTime' => $end->copy()->format('Y-m-d H:i:s'),
                'queryType' => 3,
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
        \Log::info('script command:getLastMonthTbOrderDetailsBySettleAt end');
    }
}
