<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'index']);
Route::get('/kontak', [\App\Http\Controllers\HomepageController::class, 'contact']);
Route::match(['post', 'get'], '/login-admin', [\App\Http\Controllers\Admin\AuthController::class, 'login']);
Route::get('/', [\App\Http\Controllers\Admin\AuthController::class, 'logout']);
Route::group(['prefix' => 'pengaduan'], function () {
    Route::get('/', [\App\Http\Controllers\PengaduanController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\PengaduanController::class, 'store']);
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth:web'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::group(['prefix' => 'pengaduan'], function () {
        Route::group(['prefix' => 'menunggu'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\PengaduanController::class, 'waiting']);
            Route::match(['post', 'get'], '/{id}', [\App\Http\Controllers\Admin\PengaduanController::class, 'detail_waiting']);
        });
        Route::group(['prefix' => 'terima'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\PengaduanController::class, 'accepted']);
        });
        Route::group(['prefix' => 'tolak'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\PengaduanController::class, 'denied']);
        });
    });
});
