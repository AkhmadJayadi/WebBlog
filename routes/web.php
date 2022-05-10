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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

Route::get('/proyek', function () {
    return view('proyek', [
        "title" => "Proyek"
    ]);
});

Route::get('/workshop', function () {
    return view('workshop',[
        "title" => "Workshop"
    ]);
});

Route::get('/civil', function () {
    return view('civil',[
        "title" => "Proyek"
    ]);
});

Route::get('/heavy', function () {
    return view('heavy',[
        "title" => "Proyek"
    ]);
});

Route::get('/screw', function () {
    return view('screw',[
        "title" => "Proyek"
    ]);
});

Route::get('/steel', function () {
    return view('steel',[
        "title" => "Proyek"
    ]);
});

Route::get('/tanks', function () {
    return view('tanks',[
        "title" => "Proyek"
    ]);
});