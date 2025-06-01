<?php

namespace App\Jobs;

use Illuminate\Bus\Batchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class processTask2 implements ShouldQueue
{
    use Queueable, Batchable;
    public $taskId;
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
        sleep(5);
        Log::info("Second Task is Started" . $this->taskId);
    }
}
