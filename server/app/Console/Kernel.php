<?php

namespace App\Console;

use App\Console\Commands\GetLastMonthJdOrderDetailsBySettleAt;
use App\Console\Commands\GetLastMonthTbOrderDetailsBySettleAt;
use App\Console\Commands\GetTenDayJdOrderDetailsByPaymentAt;
use App\Console\Commands\GetTenDayTbOrderDetailsByPaymentAt;
use App\Console\Commands\GetTwentyMinutesJdOrderDetailsByPaymentAt;
use App\Console\Commands\GetTwentyMinutesJdOrderDetailsBySettleAt;
use App\Console\Commands\GetTwentyMinutesTbOrderDetailsByPaymentAt;
use App\Console\Commands\GetTwentyMinutesTbOrderDetailsBySettleAt;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        GetTwentyMinutesTbOrderDetailsByPaymentAt::class,
        GetTwentyMinutesTbOrderDetailsBySettleAt::class,
        GetTenDayTbOrderDetailsByPaymentAt::class,
        GetLastMonthTbOrderDetailsBySettleAt::class,
        GetTwentyMinutesJdOrderDetailsByPaymentAt::class,
        GetTwentyMinutesJdOrderDetailsBySettleAt::class,
        GetTenDayJdOrderDetailsByPaymentAt::class,
        GetLastMonthJdOrderDetailsBySettleAt::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // 每分钟拉前20分钟的实时单，根据付款时间拉取
        $schedule->command('command:getTwentyMinutesTbOrderDetailsByPaymentAt')->everyMinute()->runInBackground();
        // 每五分钟拉取前20分钟的实时结算单，根据结算时间拉取
        $schedule->command('command:getTwentyMinutesTbOrderDetailsBySettleAt')->everyFiveMinutes()->runInBackground();
        // 每晚拉取前10天的订单，根据付款时间拉取
        $schedule->command('command:getTenDayTbOrderDetailsByPaymentAt')->daily()->runInBackground();
        // 每月21日拉取上月结算订单
        $schedule->command('command:getLastMonthTbOrderDetailsBySettleAt')->monthlyOn(21)->runInBackground();

        // 每分钟拉前20分钟的实时单，根据付款时间拉取
        $schedule->command('command:getTwentyMinutesJdOrderDetailsByPaymentAt')->everyMinute()->runInBackground();
        // 每五分钟拉取前20分钟的实时结算单，根据结算时间拉取
        $schedule->command('command:getTwentyMinutesJdOrderDetailsBySettleAt')->everyFiveMinutes()->runInBackground();
        // 每晚拉取前10天的订单，根据付款时间拉取
        $schedule->command('command:getTenDayJdOrderDetailsByPaymentAt')->daily()->runInBackground();
        // 每月21日拉取上月结算订单
        $schedule->command('command:getLastMonthJdOrderDetailsBySettleAt')->monthlyOn(21)->runInBackground();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
