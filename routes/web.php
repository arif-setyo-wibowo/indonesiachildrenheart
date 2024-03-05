<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\admin\PetugasController;
use App\Http\Controllers\admin\SejarahController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(BeritaController::class)->prefix('berita')->group(function () {
    Route::get('/', 'index')->name('berita');
});


Route::controller(GaleriController::class)->prefix('galeri')->group(function () {
    Route::get('/', 'index')->name('galeri');
});

Route::controller(KontakController::class)->prefix('kontak')->group(function () {
    Route::get('/', 'index')->name('kontak');
});

Route::controller(AboutController::class)->prefix('about')->group(function () {
    Route::get('/', 'index')->name('sejarah');
    Route::get('/pengurus', 'pengurus')->name('pengurus');
});




Route::prefix('back')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });
    
    Route::controller(SliderController::class)->group(function () {
        Route::get('/slider', 'index')->name('admin.slider');
    });

    Route::controller(AdminBeritaController::class)->group(function () {
        Route::get('/berita', 'index')->name('admin.berita');
    });

    Route::controller(AdminGaleriController::class)->group(function () {
        Route::get('/galeri', 'index')->name('admin.galeri');
    });

    Route::controller(SejarahController::class)->group(function () {
        Route::get('/sejarah', 'index')->name('admin.sejarah');
    });

    Route::controller(PetugasController::class)->group(function () {
        Route::get('/petugas', 'index')->name('admin.petugas');
    });


});