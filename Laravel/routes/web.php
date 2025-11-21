<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ChartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('welcome');
});

Route::get('/db', 'App\Http\Controllers\ControllerDatabase@read');

Route::get('/chart', [ChartController::class, 'OpenChartPage']);

Route::resource('crud', CrudController::class);