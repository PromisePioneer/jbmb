<?php

use App\Http\Controllers\Master\KondisiController;
use App\Http\Controllers\Master\MotorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);
Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::controller(\App\Http\Controllers\Master\JenisController::class)->group(function () {
        Route::prefix('jenis')->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'create');
            Route::post('/store', 'store');
            Route::get('/edit/{jenis}', 'edit');
            Route::post('update/{jenis}', 'update');
            Route::delete('delete/{jenis}', 'destroy');
        });
    });

    Route::controller(KondisiController::class)->group(function () {
        Route::prefix('kondisi')->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'create');
            Route::post('/store', 'store');
            Route::get('/edit/{kondisi}', 'edit');
            Route::post('update/{kondisi}', 'update');
            Route::delete('delete/{kondisi}', 'destroy');
        });
    });

    Route::controller(MotorController::class)->group(function () {
        Route::prefix('motor')->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'create');
            Route::get('/show', 'show');
            Route::post('/store', 'store');
            Route::get('/edit/{motor}', 'edit');
            Route::post('update/{motor}', 'update');
            Route::delete('delete/{motor}', 'destroy');
        });
    });
});
