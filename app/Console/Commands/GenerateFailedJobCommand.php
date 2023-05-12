<?php

namespace App\Console\Commands;

use App\Jobs\GenerateFailedJob;
use Illuminate\Console\Command;

class GenerateFailedJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jobs:failed:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a failed job for testing purposes.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dispatch(new GenerateFailedJob());
    }
}
