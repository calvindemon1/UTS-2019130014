<?php

use App\Http\Controllers\PokemonsController;
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

Route::redirect('/', 'home');

Route::get('/home', [PokemonsController::class, 'home'])->name('home');

Route::get('/detail/{id}', [PokemonsController::class, 'detail'])->name('detail');

Route::get('/home/o-id-asc', [PokemonsController::class, 'home'])->name('asc');

Route::get('/home/o-id-desc', [PokemonsController::class, 'odesc'])->name('desc');

Route::get('/home/o-a-z', [PokemonsController::class, 'oaz'])->name('az');

Route::get('/home/o-z-a', [PokemonsController::class, 'oza'])->name('za');

Route::get('/home/randomize', [PokemonsController::class, 'randomize'])->name('random');

Route::get('/progress', [PokemonsController::class, 'progress'])->name('progress');

Route::get('/home/search?search_query={$search}', [PokemonsController::class, 'search'])->name('search');

Route::fallback(function () {
    return view('404');
});
