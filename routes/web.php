<?php

use App\Http\Controllers\ScraperController;
use App\Models\Periodico;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Search\PeriodicoController;




Route::get('/', function () {
    return view('periodico');
});
Route::post('/cons', [PeriodicoController::class, 'buscarPorId'])->name('periodicos');

Route::get('/scraper',[ScraperController::class, 'scrape']);

require __DIR__.'/auth.php';
