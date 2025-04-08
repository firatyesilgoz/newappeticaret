<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagehomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Models\SiteSetting;
use App\Http\Controllers\AjaxController;
Route::group(['middleware' => 'sitesetting'], function () { // Burada 'Middleware' değil 'middleware' olacak!

    Route::get('/', [PagehomeController::class, 'anasayfa'])->name('anasayfa');

    Route::get('/urunler', [PageController::class, 'urunler'])->name('urunler');

    Route::get('/erkek/{slug?}', [PageController::class, 'urunler'])->name('erkekurunler');
    Route::get('/kadin/{slug?}', [PageController::class, 'urunler'])->name('kadinurunler');
    Route::get('/cocuk/{slug?}  ', [PageController::class, 'urunler'])->name('cocukurunler');
    Route::get('/indirimdekiler', [PageController::class, 'indirimdekiurunler'])->name('indirimdekiurunler');

    Route::get('/urun/{slug}', [PageController::class, 'urundetay'])->name('urundetay');

    Route::get('/hakkimizda', [PageController::class, 'hakkimizda'])->name('hakkimizda');

    Route::get('/sepet', [PageController::class, 'sepet'])->name('sepet');

    Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');

    Route::post('/iletisim/kaydet', [AjaxController::class, 'iletisimkaydet'])->name('iletisim.kaydet');

});
