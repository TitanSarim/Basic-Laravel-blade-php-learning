<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::view('/first', 'first')->name('first');

Route::get('/loop-test/{num}/{name}', [\App\Http\Controllers\TestController::class, 'loop'])->name('loop.test');

