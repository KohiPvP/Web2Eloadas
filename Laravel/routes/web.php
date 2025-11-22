<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Middleware\Auth2;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {return Inertia::render('welcome');})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {return Inertia::render('dashboard');})->name('dashboard');
    Route::get('user', function () { return view('user'); })->name("user");
    Route::get('admin', 'App\Http\Controllers\AdminController@adminPage');

    // Üzenetek menü – csak bejelentkezve
    Route::get('messages', [MessageController::class, 'index'])
        ->name('messages.index');

    Route::get('/contact', [ContactController::class, 'showForm'])
        ->name('contact.show');

    Route::post('/contact', [ContactController::class, 'send'])
        ->name('contact.send');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('exercise1', function () { return view('view1'); });
Route::get('introduction', function () { return view('introduction'); });




Route::get('/db', 'App\Http\Controllers\ControllerDatabase@read');

Route::get('/chart', [ChartController::class, 'OpenChartPage']);

Route::resource('crud', CrudController::class);
