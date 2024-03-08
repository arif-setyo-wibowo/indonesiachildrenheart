<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\KontakController as AdminKontakController;
use App\Http\Controllers\admin\PengurusController;
use App\Http\Controllers\admin\PetugasController;
use App\Http\Controllers\admin\SejarahController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
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
    Route::get('/{idkategori}', [BeritaController::class, 'beritaByKategori'])->name('berita.by.kategori');
    Route::get('/archive/{monthYear}', [BeritaController::class, 'beritaByArchive'])->name('berita.by.archive');
    Route::get('/search', [BeritaController::class, 'searchBerita'])->name('berita.search');
    Route::get('/detail', 'detail')->name('berita.detail');
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

Route::controller(LoginController::class)->prefix('login')->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/', 'postlogin')->name('postlogin');
});



Route::middleware('petugas')->prefix('back')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });
    
    Route::controller(SliderController::class)->prefix('slider')->group(function () {
        Route::get('/', 'index')->name('admin.slider');
        Route::post('/', 'storeUpdate')->name('admin.slider.post');
    });

    Route::controller(AdminBeritaController::class)->prefix('berita')->group(function () {
        Route::get('/', 'index')->name('admin.berita');
        Route::post('/', 'storeUpdate')->name('admin.berita.store.update');
        Route::get('/delete', 'destroy')->name('admin.delete.berita');
    });

    Route::controller(AdminGaleriController::class)->prefix('galeri')->group(function () {
        Route::get('/', 'index')->name('admin.galeri');
        Route::post('/', 'storeUpdate')->name('admin.galeri.store.update');
        Route::get('/delete', 'destroy')->name('admin.delete.galeri');
    });

    Route::controller(SejarahController::class)->group(function () {
        Route::get('/sejarah', 'index')->name('admin.sejarah');
        Route::post('/sejarah', 'update')->name('admin.sejarah.post');
    });

    Route::controller(PetugasController::class)->prefix('petugas')->group(function () {
        Route::get('/', 'index')->name('admin.petugas');
        Route::post('/', 'storeUpdate')->name('petugas.store.update');
        Route::get('/delete', 'destroy')->name('delete.petugas');
    });

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
        Route::get('/', 'index')->name('admin.kategori');
        Route::post('/', 'storeUpdate')->name('admin.kategori.store.update');
        Route::get('/delete', 'destroy')->name('admin.delete.kategori');
    });

    Route::controller(PengurusController::class)->prefix('pengurus')->group(function () {
        Route::get('/', 'index')->name('admin.pengurus');
        Route::post('/', 'storeUpdate')->name('admin.pengurus.store.update');
        Route::get('/delete', 'destroy')->name('admin.delete.pengurus');
    });


});