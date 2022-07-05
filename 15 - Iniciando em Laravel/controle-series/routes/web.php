<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
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

Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series', SeriesController::class)
    ->except(['show']);

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');

Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/ola', function () {
    echo "Olá Mundo!";
});

// Route::get('/series', [SeriesController::class, 'index']);
// Route::get('/series/criar', [SeriesController::class, 'create']);
// Route::post('/series/salvar', [SeriesController::class, 'store']);
