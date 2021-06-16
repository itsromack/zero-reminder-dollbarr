<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use DB;

class ExpiringProductsReminderCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'dolibarr:expiring-products';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Send email reminder of the list of expiring products';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
