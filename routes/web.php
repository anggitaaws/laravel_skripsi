<?php

use App\Http\Controllers\BeritaAcaraPenghapusanGD\BeritaAcaraPenghapusanGDController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\DataAsetJTM\DataAsetJTMController;
use App\Http\Controllers\DataAsetJTR\DataAsetJTRController;
use App\Http\Controllers\DataAsetGardu\DataAsetGarduController;
use App\Http\Controllers\BeritaAcaraPengoperasianGD\BeritaAcaraPengoperasianGDController;
use App\Http\Controllers\BeritaAcaraPengoperasianJTM\BeritaAcaraPengoperasianJTMController;
use App\Http\Controllers\BeritaAcaraPengoperasianJTR\BeritaAcaraPengoperasianJTRController;
use App\Http\Controllers\BeritaAcaraUpdateGD\BeritaAcaraUpdateGDController;
use App\Http\Controllers\BeritaAcaraUpdateJTM\BeritaAcaraUpdateJTMController;
use App\Http\Controllers\BeritaAcaraUpdateJTR\BeritaAcaraUpdateJTRController;

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
    Route::get('/cari','search')->name('DataAsetJTM.search');
});

Route::controller(BeritaAcaraPengoperasianGDController::class)->prefix('berita_acara_pengoperasian_gd')->group(function(){
    Route::get('','index')->name('BeritaAcaraPengoperasianGD');
    Route::get('/create','create')->name('BeritaAcaraPengoperasianGD.create');
    Route::post('/store','store')->name('BeritaAcaraPengoperasianGD.store');
    Route::get('/show/{id}','show')->name('BeritaAcaraPengoperasianGD.show');
    Route::get('/edit/{id}','edit')->name('BeritaAcaraPengoperasianGD.edit');
    Route::put('/edit/{id}','update')->name('BeritaAcaraPengoperasianGD.update');
    Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraPengoperasianGD.destroy');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraPengoperasianGD.unduhexcel');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraPengoperasianGD.unduhpdf');
});

Route::controller(BeritaAcaraPengoperasianJTRController::class)->prefix('berita_acara_pengoperasian_jtr')->group(function(){
    Route::get('','index')->name('BeritaAcaraPengoperasianJTR');
    Route::get('/create','create')->name('BeritaAcaraPengoperasianJTR.create');
    Route::post('/store','store')->name('BeritaAcaraPengoperasianJTR.store');
    Route::get('/show/{id}','show')->name('BeritaAcaraPengoperasianJTR.show');
    Route::get('/edit/{id}','edit')->name('BeritaAcaraPengoperasianJTR.edit');
    Route::put('/edit/{id}','update')->name('BeritaAcaraPengoperasianJTR.update');
    Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraPengoperasianJTR.destroy');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraPengoperasianJTR.unduhexcel');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraPengoperasianJTR.unduhpdf');
});

Route::controller(BeritaAcaraPengoperasianJTMController::class)->prefix('berita_acara_pengoperasian_jtm')->group(function(){
    Route::get('','index')->name('BeritaAcaraPengoperasianJTM');
    Route::get('/create','create')->name('BeritaAcaraPengoperasianJTM.create');
    Route::post('/store','store')->name('BeritaAcaraPengoperasianJTM.store');
    Route::get('/show/{id}','show')->name('BeritaAcaraPengoperasianJTM.show');
    Route::get('/edit/{id}','edit')->name('BeritaAcaraPengoperasianJTM.edit');
    Route::put('/edit/{id}','update')->name('BeritaAcaraPengoperasianJTM.update');
    Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraPengoperasianJTM.destroy');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraPengoperasianJTM.unduhexcel');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraPengoperasianJTM.unduhpdf');
});

Route::controller(BeritaAcaraPenghapusanGDController::class)->prefix('berita_acara_penghapusan_gd')->group(function(){
    Route::get('','index')->name('BeritaAcaraPenghapusanGD');
    Route::get('/create','create')->name('BeritaAcaraPenghapusanGD.create');
    Route::post('/store','store')->name('BeritaAcaraPenghapusanGD.store');
    Route::get('/show/{id}','show')->name('BeritaAcaraPenghapusanGD.show');
    Route::get('/edit/{id}','edit')->name('BeritaAcaraPenghapusanGD.edit');
    Route::put('/edit/{id}','update')->name('BeritaAcaraPenghapusanGD.update');
    Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraPenghapusanGD.destroy');
});

Route::controller(BeritaAcaraUpdateGDController::class)->prefix('berita_acara_update_gd')->group(function(){
    Route::get('','index')->name('BeritaAcaraUpdateGD');
    Route::get('/create','create')->name('BeritaAcaraUpdateGD.create');
    Route::post('/store','store')->name('BeritaAcaraUpdateGD.store');
    Route::get('/show/{id}','show')->name('BeritaAcaraUpdateGD.show');
    Route::get('/edit/{id}','edit')->name('BeritaAcaraUpdateGD.edit');
    Route::put('/edit/{id}','update')->name('BeritaAcaraUpdateGD.update');
    Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraUpdateGD.destroy');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraUpdateGD.unduhexcel');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraUpdateGD.unduhpdf');
});

Route::controller(BeritaAcaraUpdateJTRController::class)->prefix('berita_acara_update_jtr')->group(function(){
    Route::get('','index')->name('BeritaAcaraUpdateJTR');
    Route::get('/create','create')->name('BeritaAcaraUpdateJTR.create');
    Route::post('/store', 'store')->name('BeritaAcaraUpdateJTR.store');
    Route::get('/show/{id}','show')->name('BeritaAcaraUpdateJTR.show');
    Route::get('/edit/{id}','edit')->name('BeritaAcaraUpdateJTR.edit');
    Route::put('/edit/{id}','update')->name('BeritaAcaraUpdateJTR.update');
    Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraUpdateJTR.destroy');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraUpdateJTR.unduhpdf');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraUpdateJTR.unduhexcel');
});

Route::controller(BeritaAcaraUpdateJTMController::class)->prefix('berita_acara_update_jtm')->group(function(){
    Route::get('','index')->name('BeritaAcaraUpdateJTM');
    Route::get('/create','create')->name('BeritaAcaraUpdateJTM.create');
    Route::post('/store','store')->name('BeritaAcaraUpdateJTM.store');
});