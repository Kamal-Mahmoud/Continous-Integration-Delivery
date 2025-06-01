<?php

use App\Jobs\processTask;
use App\Jobs\processTask2;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    // processTask::dispatch(1)->delay(now()->addSeconds(5));
    // processTask::dispatch(2);

    Bus::batch(
        [
            new processTask(1),
            new processTask2(2),
        ]
    )->dispatch();

    return view('welcome');
});
