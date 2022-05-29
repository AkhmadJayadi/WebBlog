<?php

use App\Models\Tank;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TankController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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
        "title" => "civil"
    ]);
});

Route::get('/heavy', function () {
    return view('heavy',[
        "title" => "heavy"
    ]);
});

Route::get('/screw', function () {
    return view('screw',[
        "title" => "screw"
    ]);
});

Route::get('/steel', function () {
    return view('steel',[
        "title" => "steel"
    ]);
});



Route::get('/tanks', [TankController::class, 'index'] );
//halaman single post
Route::get('/tanks/{slug}', [TankController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
} )->middleware('auth');
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
