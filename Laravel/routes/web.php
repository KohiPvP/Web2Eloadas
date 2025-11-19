<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::resource('crud', CrudController::class);