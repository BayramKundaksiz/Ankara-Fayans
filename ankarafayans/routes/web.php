<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\YoneticiController;
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


Route::get('/', [AnasayfaController::class,'anasayfa'])->name('anasayfa');

Route::get('yaptigim-isler', [AnasayfaController::class,'yaptigimisler'])->name('yaptigimisler');

Route::get('hakkimda', [AnasayfaController::class,'hakkimda'])->name('hakkimda');

Route::get('iletisim', [AnasayfaController::class,'iletisim'])->name('iletisim');

Route::post('gelenmesaj', [AnasayfaController::class,'gelenmesaj'])->name('gelenmesaj');

Route::get('referanslar', [AnasayfaController::class,'referanslar'])->name('referanslar');

Route::get('giris-ekrani', [AnasayfaController::class,'girisekrani'])->name('girisekrani');

Route::get('yonet', [AnasayfaController::class,'yonet'])->name('yonet');

Route::get('fayans-ekleme-sayfasi', [YoneticiController::class,'fayansekleme'])->name('fayansekle');

Route::get('seramik-ekleme-sayfasi', [YoneticiController::class,'seramikekleme'])->name('seramikekle');

Route::get('banyo-ekleme-sayfasi', [YoneticiController::class,'banyoekleme'])->name('banyoekle');

Route::get('tuvalet-ekleme-sayfasi', [YoneticiController::class,'tuvaletekleme'])->name('tuvaletekle');

Route::get('referans-ekleme-sayfasi', [YoneticiController::class,'referansekleme'])->name('referansekle');

Route::post('fayanseklendi', [YoneticiController::class,'fayanseklendi'])->name('fayanseklendi');

Route::post('seramikeklendi', [YoneticiController::class,'seramikeklendi'])->name('seramikeklendi');

Route::post('banyoeklendi', [YoneticiController::class,'banyoeklendi'])->name('banyoeklendi');

Route::post('tuvaleteklendi', [YoneticiController::class,'tuvaleteklendi'])->name('tuvaleteklendi');

Route::post('referanseklendi', [YoneticiController::class,'referanseklendi'])->name('referanseklendi');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
