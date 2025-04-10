<?php

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PagehomeController;
Route::group(['middleware' => 'sitesetting'], function () { // Burada 'Middleware' değil 'middleware' olacak!

    Route::get('/', [PagehomeController::class, 'anasayfa'])->name('anasayfa');

    Route::get('/urunler', [PageController::class, 'urunler'])->name('urunler');

    Route::get('/erkek/{slug?}', [PageController::class, 'urunler'])->name('erkekurunler');
    Route::get('/kadin/{slug?}', [PageController::class, 'urunler'])->name('kadinurunler');
    Route::get('/cocuk/{slug?}  ', [PageController::class, 'urunler'])->name('cocukurunler');
    Route::get('/indirimdekiler', [PageController::class, 'indirimdekiurunler'])->name('indirimdekiurunler');

    Route::get('/urun/{slug}', [PageController::class, 'urundetay'])->name('urundetay');

    Route::get('/hakkimizda', [PageController::class, 'hakkimizda'])->name('hakkimizda');

    Route::post('/iletisim/kaydet', [AjaxController::class, 'iletisimkaydet'])->name('iletisim.kaydet');

    Route::get('/sepet', [CartController::class, 'index'])->name('sepet');

    Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');


    Route::post('/sepet/ekle', [CartController::class, 'add'])->name('sepet.add');
    Route::post('/sepet/remove', [CartController::class, 'remove'])->name('sepet.remove');
});
