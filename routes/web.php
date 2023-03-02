<?php

use App\Http\Controllers\ComicsController;
use App\Http\Controllers\PagesController;
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

Route::get('/comics', [ComicsController::class, 'index'])->name('comics.index');
Route::get('/comics/create', [ComicsController::class, 'create'])->name('comics.create');
Route::get('/comics/{comic}', [ComicsController::class, 'show'])->name('comics.show');
Route::post('/comics', [ComicsController::class, 'store'])->name('comics.store');
Route::get('/comics/{comic}/edit', [ComicsController::class, 'edit'])->name('comics.edit');
Route::put('/comics/{comic}', [ComicsController::class, 'update'])->name('comics.update');


Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/characters', [PagesController::class, 'characters'])->name('characters');

Route::get('/collectibles', [PagesController::class, 'collectibles'])->name('collectibles');

Route::get('/fans', [PagesController::class, 'fans'])->name('fans');

Route::get('/games', [PagesController::class, 'games'])->name('games');

Route::get('/movies', [PagesController::class, 'movies'])->name('movies');

Route::get('/news', [PagesController::class, 'news'])->name('news');

Route::get('/shop', [PagesController::class, 'shop'])->name('shop');

Route::get('/tv', [PagesController::class, 'tv'])->name('tv');

Route::get('/videos', [PagesController::class, 'videos'])->name('videos');
