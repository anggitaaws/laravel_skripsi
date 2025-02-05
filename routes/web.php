<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Pengguna\PenggunaController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\DataAsetJTM\DataAsetJTMController;
use App\Http\Controllers\DataAsetJTR\DataAsetJTRController;
use App\Http\Controllers\DataAsetGardu\DataAsetGarduController;
use App\Http\Controllers\BeritaAcaraUpdateGD\BeritaAcaraUpdateGDController;
use App\Http\Controllers\BeritaAcaraUpdateJTM\BeritaAcaraUpdateJTMController;
use App\Http\Controllers\BeritaAcaraUpdateJTR\BeritaAcaraUpdateJTRController;
use App\Http\Controllers\BeritaAcaraPenghapusanGD\BeritaAcaraPenghapusanGDController;
use App\Http\Controllers\BeritaAcaraPengoperasianGD\BeritaAcaraPengoperasianGDController;
use App\Http\Controllers\BeritaAcaraPengoperasianJTM\BeritaAcaraPengoperasianJTMController;
use App\Http\Controllers\BeritaAcaraPengoperasianJTR\BeritaAcaraPengoperasianJTRController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[UserController::class,'login'])->name('login');
Route::post('/',[UserController::class,'doLogin'])->name('login.post');
Route::get('user/logout',[UserController::class,'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('home')->middleware(['auth']);

Route::controller(DataAsetGarduController::class)->prefix('data_aset_gardu')->group(function() {
    Route::get('','index')->name('DataAsetGardu')->middleware('role:admin');
    Route::get('/show/{id}','show')->name('DataAsetGardu.show')->middleware('role:admin');
    Route::get('/cari','search')->name('DataAsetGardu.search')->middleware('role:admin');

    Route::middleware(['role:superadmin'])->group(function(){
        Route::get('','index')->name('DataAsetGardu');
        Route::get('/show/{id}','show')->name('DataAsetGardu.show');
        Route::get('/cari','search')->name('DataAsetGardu.search');
        Route::get('/create','create')->name('DataAsetGardu.create');
        Route::post('/store','store')->name('DataAsetGardu.store');
        Route::get('/edit/{id}','edit')->name('DataAsetGardu.edit');
        Route::put('/edit/{id}','update')->name('DataAsetGardu.update');
        Route::delete('/destroy/{id}', 'destroy')->name('DataAsetGardu.destroy');

    });
});

Route::controller(DataAsetJTRController::class)->prefix('data_aset_jtr')->group(function() {
    Route::get('','index')->name('DataAsetJTR')->middleware('role:admin');
    Route::get('/show/{id}','show')->name('DataAsetJTR.show')->middleware('role:admin');
    Route::get('/cari','search')->name('DataAsetJTR.search')->middleware('role:admin');

    Route::middleware(['role:superadmin'])->group(function(){
        Route::get('','index')->name('DataAsetJTR');
        Route::get('/show/{id}','show')->name('DataAsetJTR.show');
        Route::get('/create','create')->name('DataAsetJTR.create');
        Route::post('/store','store')->name('DataAsetJTR.store');
        Route::get('/edit/{id}','edit')->name('DataAsetJTR.edit');
        Route::put('/edit/{id}','update')->name('DataAsetJTR.update');
        Route::delete('/destroy/{id}', 'destroy')->name('DataAsetJTR.destroy');

    });
});

Route::controller(DataAsetJTMController::class)->prefix('data_aset_jtm')->group(function() {
    Route::get('','index')->name('DataAsetJTM')->middleware('role:admin');
    Route::get('/show/{id}','show')->name('DataAsetJTM.show')->middleware('role:admin');
    Route::get('/cari','search')->name('DataAsetJTM.search')->middleware('role:admin');

    Route::middleware(['role:superadmin'])->group(function(){
        Route::get('','index')->name('DataAsetJTM');
        Route::get('/show/{id}','show')->name('DataAsetJTM.show');
        Route::get('/cari','search')->name('DataAsetJTM.search');
        Route::get('/create','create')->name('DataAsetJTM.create');
        Route::post('/store','store')->name('DataAsetJTM.store');
        Route::get('/edit/{id}','edit')->name('DataAsetJTM.edit');
        Route::put('/edit/{id}','update')->name('DataAsetJTM.update');
        Route::delete('/destroy/{id}', 'destroy')->name('DataAsetJTM.destroy');

    });
});

Route::controller(BeritaAcaraPengoperasianGDController::class)->prefix('berita_acara_pengoperasian_gd')->group(function(){
    Route::get('','index')->name('BeritaAcaraPengoperasianGD')->middleware('role:admin');
    Route::get('/show/{id}','show')->name('BeritaAcaraPengoperasianGD.show')->middleware('role:admin');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraPengoperasianGD.unduhexcel')->middleware('role:admin');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraPengoperasianGD.unduhpdf')->middleware('role:admin');

    Route::middleware(['role:superadmin'])->group(function(){
        Route::get('','index')->name('BeritaAcaraPengoperasianGD');
        Route::get('/show/{id}','show')->name('BeritaAcaraPengoperasianGD.show');
        Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraPengoperasianGD.unduhexcel');
        Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraPengoperasianGD.unduhpdf');
        Route::get('/create','create')->name('BeritaAcaraPengoperasianGD.create');
        Route::post('/store','store')->name('BeritaAcaraPengoperasianGD.store');
        Route::get('/edit/{id}','edit')->name('BeritaAcaraPengoperasianGD.edit');
        Route::put('/edit/{id}','update')->name('BeritaAcaraPengoperasianGD.update');
        Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraPengoperasianGD.destroy');

    });
});

Route::controller(BeritaAcaraPengoperasianJTRController::class)->prefix('berita_acara_pengoperasian_jtr')->group(function(){
    Route::get('','index')->name('BeritaAcaraPengoperasianJTR')->middleware('role:admin');
    Route::get('/show/{id}','show')->name('BeritaAcaraPengoperasianJTR.show')->middleware('role:admin');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraPengoperasianJTR.unduhexcel')->middleware('role:admin');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraPengoperasianJTR.unduhpdf')->middleware('role:admin');

    Route::middleware(['role:superadmin'])->group(function(){
        Route::get('','index')->name('BeritaAcaraPengoperasianJTR');
        Route::get('/show/{id}','show')->name('BeritaAcaraPengoperasianJTR.show');
        Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraPengoperasianJTR.unduhexcel');
        Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraPengoperasianJTR.unduhpdf');
        Route::get('/create','create')->name('BeritaAcaraPengoperasianJTR.create');
        Route::post('/store','store')->name('BeritaAcaraPengoperasianJTR.store');
        Route::get('/edit/{id}','edit')->name('BeritaAcaraPengoperasianJTR.edit');
        Route::put('/edit/{id}','update')->name('BeritaAcaraPengoperasianJTR.update');
        Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraPengoperasianJTR.destroy');

    });
});

Route::controller(BeritaAcaraPengoperasianJTMController::class)->prefix('berita_acara_pengoperasian_jtm')->group(function(){
    Route::get('','index')->name('BeritaAcaraPengoperasianJTM')->middleware('role:admin');
    Route::get('/show/{id}','show')->name('BeritaAcaraPengoperasianJTM.show')->middleware('role:admin');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraPengoperasianJTM.unduhexcel')->middleware('role:admin');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraPengoperasianJTM.unduhpdf')->middleware('role:admin');

    Route::middleware(['role:superadmin'])->group(function(){
        Route::get('','index')->name('BeritaAcaraPengoperasianJTM');
        Route::get('/show/{id}','show')->name('BeritaAcaraPengoperasianJTM.show');
        Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraPengoperasianJTM.unduhexcel');
        Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraPengoperasianJTM.unduhpdf');
        Route::get('/create','create')->name('BeritaAcaraPengoperasianJTM.create');
        Route::post('/store','store')->name('BeritaAcaraPengoperasianJTM.store');
        Route::get('/edit/{id}','edit')->name('BeritaAcaraPengoperasianJTM.edit');
        Route::put('/edit/{id}','update')->name('BeritaAcaraPengoperasianJTM.update');
        Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraPengoperasianJTM.destroy');
    });
});

Route::controller(BeritaAcaraPenghapusanGDController::class)->prefix('berita_acara_penghapusan_gd')->group(function(){
    Route::get('','index')->name('BeritaAcaraPenghapusanGD')->middleware('role:admin');
    Route::get('/show/{id}','show')->name('BeritaAcaraPenghapusanGD.show')->middleware('role:admin');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraPenghapusanGD.unduhpdf')->middleware('role:admin');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraPenghapusanGD.unduhexcel')->middleware('role:admin');

    Route::middleware(['role:superadmin'])->group(function(){
        Route::get('','index')->name('BeritaAcaraPenghapusanGD');
        Route::get('/show/{id}','show')->name('BeritaAcaraPenghapusanGD.show');
        Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraPenghapusanGD.unduhpdf');
        Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraPenghapusanGD.unduhexcel');
        Route::get('/create','create')->name('BeritaAcaraPenghapusanGD.create');
        Route::post('/store','store')->name('BeritaAcaraPenghapusanGD.store');
        Route::get('/edit/{id}','edit')->name('BeritaAcaraPenghapusanGD.edit');
        Route::put('/edit/{id}','update')->name('BeritaAcaraPenghapusanGD.update');
        Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraPenghapusanGD.destroy');
    });
});

Route::controller(BeritaAcaraUpdateGDController::class)->prefix('berita_acara_update_gd')->group(function(){
    Route::get('','index')->name('BeritaAcaraUpdateGD')->middleware('role:admin');
    Route::get('/show/{id}','show')->name('BeritaAcaraUpdateGD.show')->middleware('role:admin');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraUpdateGD.unduhexcel')->middleware('role:admin');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraUpdateGD.unduhpdf')->middleware('role:admin');

    Route::middleware(['role:superadmin'])->group(function(){
        Route::get('','index')->name('BeritaAcaraUpdateGD');
        Route::get('/show/{id}','show')->name('BeritaAcaraUpdateGD.show');
        Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraUpdateGD.unduhexcel');
        Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraUpdateGD.unduhpdf');
        Route::get('/create','create')->name('BeritaAcaraUpdateGD.create');
        Route::post('/store','store')->name('BeritaAcaraUpdateGD.store');
        Route::get('/edit/{id}','edit')->name('BeritaAcaraUpdateGD.edit');
        Route::put('/edit/{id}','update')->name('BeritaAcaraUpdateGD.update');
        Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraUpdateGD.destroy');
    });
});

Route::controller(BeritaAcaraUpdateJTRController::class)->prefix('berita_acara_update_jtr')->group(function(){
    Route::get('','index')->name('BeritaAcaraUpdateJTR')->middleware('role:admin');
    Route::get('/show/{id}','show')->name('BeritaAcaraUpdateJTR.show')->middleware('role:admin');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraUpdateJTR.unduhpdf')->middleware('role:admin');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraUpdateJTR.unduhexcel')->middleware('role:admin');

    Route::middleware(['role:superadmin'])->group(function(){
        Route::get('','index')->name('BeritaAcaraUpdateJTR');
        Route::get('/show/{id}','show')->name('BeritaAcaraUpdateJTR.show');
        Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraUpdateJTR.unduhpdf');
        Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraUpdateJTR.unduhexcel');
        Route::get('/create','create')->name('BeritaAcaraUpdateJTR.create');
        Route::post('/store', 'store')->name('BeritaAcaraUpdateJTR.store');
        Route::get('/edit/{id}','edit')->name('BeritaAcaraUpdateJTR.edit');
        Route::put('/edit/{id}','update')->name('BeritaAcaraUpdateJTR.update');
        Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraUpdateJTR.destroy');
    });
});

Route::controller(BeritaAcaraUpdateJTMController::class)->prefix('berita_acara_update_jtm')->group(function(){
    Route::get('','index')->name('BeritaAcaraUpdateJTM')->middleware('role:admin');
    Route::get('/show/{id}','show')->name('BeritaAcaraUpdateJTM.show')->middleware('role:admin');
    Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraUpdateJTM.unduhpdf')->middleware('role:admin');
    Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraUpdateJTM.unduhexcel')->middleware('role:admin');

    Route::middleware(['role:superadmin'])->group(function(){
        Route::get('','index')->name('BeritaAcaraUpdateJTM');
        Route::get('/show/{id}','show')->name('BeritaAcaraUpdateJTM.show');
        Route::get('/unduh/pdf/{id}','downloadPdf')->name('BeritaAcaraUpdateJTM.unduhpdf');
        Route::get('/unduh/excel/{id}','downloadExcel')->name('BeritaAcaraUpdateJTM.unduhexcel');
        Route::get('/create','create')->name('BeritaAcaraUpdateJTM.create');
        Route::post('/store','store')->name('BeritaAcaraUpdateJTM.store');
        Route::get('/edit/{id}','edit')->name('BeritaAcaraUpdateJTM.edit');
        Route::put('/edit/{id}','update')->name('BeritaAcaraUpdateJTM.update');
        Route::delete('/destroy/{id}','destroy')->name('BeritaAcaraUpdateJTM.destroy');
    });
});

Route::controller(PenggunaController::class)->prefix('pengguna')->group(function(){

    Route::middleware(['role:superadmin'])->group(function(){
        Route::get('','index')->name('Pengguna');
        Route::get('/create','create')->name('Pengguna.create');
        Route::post('/store','store')->name('Pengguna.store');
        Route::get('/edit/{id}','edit')->name('Pengguna.edit');
        Route::put('/edit/{id}','update')->name('Pengguna.update');
        Route::delete('/destroy/{id}','destroy')->name('Pengguna.destroy');
    });
});

