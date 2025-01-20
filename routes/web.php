<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\DataAsetJTM\DataAsetJTMController;
use App\Http\Controllers\DataAsetJTR\DataAsetJTRController;
use App\Http\Controllers\DataAsetGardu\DataAsetGarduController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[UserController::class,'login'])->name('login');
Route::post('/',[UserController::class,'doLogin'])->name('login.post');
Route::get('user/logout',[UserController::class,'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

Route::controller(DataAsetGarduController::class)->prefix('data_aset_gardu')->group(function() {
    Route::get('','index')->name('DataAsetGardu');
    Route::get('/create','create')->name('DataAsetGardu.create');
    Route::post('/store','store')->name('DataAsetGardu.store');
    Route::get('/show/{id}','show')->name('DataAsetGardu.show');
    Route::get('/edit/{id}','edit')->name('DataAsetGardu.edit');
    Route::put('/edit/{id}','update')->name('DataAsetGardu.update');
    Route::delete('/destroy/{id}', 'destroy')->name('DataAsetGardu.destroy');
    Route::get('/cari','search')->name('DataAsetGardu.search');
});

Route::controller(DataAsetJTRController::class)->prefix('data_aset_jtr')->group(function() {
    Route::get('','index')->name('DataAsetJTR');
    Route::get('/create','create')->name('DataAsetJTR.create');
    Route::post('/store','store')->name('DataAsetJTR.store');
    Route::get('/show/{id}','show')->name('DataAsetJTR.show');
    Route::get('/edit/{id}','edit')->name('DataAsetJTR.edit');
    Route::put('/edit/{id}','update')->name('DataAsetJTR.update');
    Route::delete('/destroy/{id}', 'destroy')->name('DataAsetJTR.destroy');
    Route::get('/cari','search')->name('DataAsetJTR.search');
});

Route::controller(DataAsetJTMController::class)->prefix('data_aset_jtm')->group(function() {
    Route::get('','index')->name('DataAsetJTM');
    Route::get('/create','create')->name('DataAsetJTM.create');
    Route::post('/store','store')->name('DataAsetJTM.store');
    Route::get('/show/{id}','show')->name('DataAsetJTM.show');
    Route::get('/edit/{id}','edit')->name('DataAsetJTM.edit');
    Route::put('/edit/{id}','update')->name('DataAsetJTM.update');
    Route::delete('/destroy/{id}', 'destroy')->name('DataAsetJTM.destroy');
});
