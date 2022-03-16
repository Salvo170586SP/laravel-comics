<?php

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

// home page dei comics
Route::get('/', function () {

    $comics = config('comics');
    return view('home', ['cards' => $comics]);
})->name('home');




//pagina del singolo comic
Route::get('/comics/{id}', function ($id) {

    $comics = config('comics');

    $comic = $comics[$id];

    return view('comics', compact('comic'));
})->name('comics');
