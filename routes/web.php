<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/' , [\App\Http\Controllers\WelcomeController::class, 'index']);
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
});
