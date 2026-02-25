<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BoardingController;

Route::get('/', function () {
    return redirect()->route('boarding.index');
});

Route::resource('boarding', BoardingController::class);