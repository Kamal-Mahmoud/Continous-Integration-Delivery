<?php

namespace App\Jobs;

use DateTime;
use Illuminate\Bus\Batchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class processTask implements ShouldQueue
{
    use Queueable ,Batchable;
    // public $timeout = 5; // اي تاسك يستغرق 5 ثواني فقط
    public $taskId;
    public $tries = 1; // Number of times the job may be attempted before it fails permanently
    //public $backoff = 3;
    // public function retryUntil(): DateTime
    // {
    //     return now()->addMinutes(5); // Retry for 5 minutes
    // }
    //public $maxExceptions = 3; // Maximum number of times the job may fail before it is removed from the queue

    /**
     * Create a new job instance.
     */
    public function __construct($taskId)
    {
        $this->taskId = $taskId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // sleep(2); // Simulate a long-running task
        // throw new \Exception("An error occurred while processing task");
        sleep(2);
        Log::info("First Task is Started" . $this->taskId);
    }
}
