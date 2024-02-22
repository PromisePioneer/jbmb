<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MotorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Seller\DashboardSellerController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcomeUser');
// });
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/orders', 'store');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticated')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware(['auth'])->group(function () {

    Route::middleware(['role:seller'])->group(function () {
        Route::controller(DashboardSellerController::class)->group(function () {
            Route::get('/seller-dashboard', 'indexDashboard')->name('dashboard.seller');
        });
    });
    Route::middleware(['role:admin'])->group(function () {
        Route::controller(DashboardController::class)->group(function () {

            Route::get('/dashboard', 'indexDashboard')->name('dashboard');
        });

        Route::controller(MotorController::class)->group(function () {

            //jenis motor
            Route::get('/jenis', 'indexJenis')->name('jenis');
            Route::get('/jenis/add', 'addJenis')->name('jenis.add');
            Route::post('/jenis/store', 'simpanJenis')->name('jenis.save');
            Route::get('/jenis/edit/{jenis}', 'editJenis')->name('jenis.edit');
            Route::patch('/jenis/update/{jenis}', 'updateJenis')->name('jenis.update');
            Route::delete('/jenis/delete/{jenis}', 'destroyJenis')->name('jenis.delete');

            //kondisi motor
            Route::get('/kondisi', 'indexKondisi')->name('kondisi');
            Route::get('/kondisi/edit/{kondisi}', 'editKondisi')->name('kondisi.edit');
            Route::get('/kondisi/add', 'createKondisi')->name('kondisi.add');
            Route::post('/kondisi/store', 'simpanKondisi')->name('kondisi.save');
            Route::patch('/kondisi/update/{kondisi}', 'updateKondisi')->name('kondisi.update');
            Route::delete('/kondisi/delete/{kondisi}', 'deleteKondisi')->name('kondisi.delete');
        });

        Route::controller(StatusController::class)->group(function () {
            Route::get('/status', 'indexStatus')->name('status');
            Route::get('/status/add', 'addStatus')->name('status.add');
            Route::get('/status/edit/{status}', 'editStatus')->name('status.edit');
            Route::post('/status/save', 'simpanStatus')->name('status.save');
            Route::patch('/status/update/{status}', 'updateStatus')->name('status.update');
            Route::delete('/status/delete/{status}', 'deleteStatus')->name('status.delete');
        });
    });
    Route::middleware(['role:admin,seller'])->group(function () {
        Route::controller(MotorController::class)->group(function () {
            //list motor
            Route::get('/motor', 'indexMotor')->name('motor');
            Route::get('/motor/edit/{motor}', 'editMotor')->name('motor.edit');
            Route::post('/motor/update/{motor}', 'updateMotor')->name('motor.update');
            Route::get('/motor/add', 'addMotor')->name('motor.add');
            Route::post('/motor/store', 'simpanMotor')->name('motor.save');
        });
    });
});
