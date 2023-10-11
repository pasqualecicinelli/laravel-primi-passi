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
    $hello = "Hello World";
    return view('home', compact('hello'));
})->name('homepage');

Route::get('/first-page', function () {

    $prints = [
        "First-",
        "page-",
        "in-",
        "Laravel"
    ];

    return view('partials.first-page', compact('prints'));
})->name('prima-pagina');

Route::get('/students', function () {
    $title = 'Elenco studenti';
    $list_students = [

        "Andrea",
        "Marco",
        "Stefano",
        "Francesco"
    ];

    return view('partials.students', compact('title', 'list_students'));

})->name('elenco-studenti');