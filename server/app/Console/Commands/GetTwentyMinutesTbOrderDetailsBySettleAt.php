<?php

namespace App\Console\Commands;

use App\Managers\DataokeManager;
use App\Managers\TbOrderManager;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GetTwentyMinutesTbOrderDetailsBySettleAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getTwentyMinutesTbOrderDetailsBySettleAt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '查询20分钟内根据结算时间查询淘宝订单';

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
        \Log::info('script command:getTwentyMinutesTbOrderDetailsBySettleAt start');
        $endTime = Carbon::now()->format('Y-m-d H:i:s');
        // 每分钟拉前20分钟的实时单，根据结算时间拉取
        $startTime = Carbon::now()->subMinutes(20)->format('Y-m-d H:i:s');
        $params = [
            'startTime' => $startTime,
            'endTime' => $endTime,
            'queryType' => 3,
            'pageSize' => 100
        ];
        while ($this->hasNext) {
            if ($this->positionIndex) {
                $params['positionIndex'] = $this->positionIndex;
            }
            $orderData = DataokeManager::getInstance()->getTbOrderDetails($params);
            $orders = $orderData['results']['publisher_order_dto'] ?? [];
            $this->positionIndex = $orderData['position_index'] ?? null;
            $this->hasNext = $orderData['has_next'] ?? false;
            foreach ($orders as $item) {
                TbOrderManager::createOrUpdateTbOrder($item);
            }
        }
        \Log::info('script command:getTwentyMinutesTbOrderDetailsBySettleAt end');
    }
}
