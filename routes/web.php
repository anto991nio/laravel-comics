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

Route::get('/', function () {
    $datiComics = config("comics");

    $datiView = [
        "comicsList" => $datiComics
    ];

    return view("home", $datiView);
})->name('pagina-comic');


Route::get("/comic/{index}", function ($index) {
    $datiComics = config("comics");
    if (!is_numeric($index) || $index < 0 || $index > count($datiComics) - 1) {
        abort(404, "Fumetto inesistente");
    }
    $comicSelezionato = $datiComics[intval($index)];
    return view("singlecomic", [
        "comic" => $comicSelezionato
    ]);
})->name("pagina-comic-single");

Route::get('/characteres', function () {

    return view("characteres");
})->name('characteres');

Route::get('/movies', function () {

    return view("movies");
})->name('movies');
Route::get('/fans', function () {

    return view("fans");
})->name('fans');
Route::get('/shop', function () {
    
    return view("shop");  
})->name('shop');
Route::get('/videos', function () {
    
    return view("videos");  
})->name('videos');
Route::get('/tv', function () {
    
    return view("tv");  
})->name('tv');
Route::get('/news', function () {
    
    return view("news");  
})->name('news');
Route::get('/collectibles', function () {
    
    return view("collectibles");  
})->name('collectibles');
Route::get('/games', function () {
    
    return view("games");  
})->name('games');
