<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class ClearFailedJobsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jobs:failed:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears a failed job for testing purposes.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Redis::connection('horizon')->del("failed_jobs");
        Redis::connection('horizon')->del("recent_failed_jobs");
    }
}
