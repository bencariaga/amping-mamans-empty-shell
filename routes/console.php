<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| Console Commands
|--------------------------------------------------------------------------
|
| Here you may define all of your Closure based console commands. Each
| Closure is bound to a command instance allowing a simple, expressive
| way to define custom console behavior.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('app:report-daily', function () {
    // Example: collect and log a simple app status report
    $status = [
        'time' => now()->toDateTimeString(),
        'env' => app()->environment(),
        'queue' => \Illuminate\Support\Facades\Queue::size(),
    ];

    Log::info('Daily app report', $status);
    $this->info('Daily report logged.');
})->describe('Log a simple daily app status report');
