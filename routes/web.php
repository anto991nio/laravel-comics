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
        "comicsList" => $datiComics    ];

    return view("home", $datiView );  
})->name('pagina-home');


Route::get("/comic/{index}", function ($index) {
    $datiComics = config("comics");
    if (!is_numeric($index) || $index < 0 || $index > count($datiComics) - 1) {
        abort(404, "Fumetto inesistente");
    }
    $comicSelezionato = $datiComics[intval($index)];
    return view("singlecomic", [
        "comic" => $comicSelezionato
    ]);
})->name("pagina-single-Comic");
