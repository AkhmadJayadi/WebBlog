<?php

use App\Models\Tank;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TankController;
use App\Http\Controllers\AboutController;
//use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeavyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScrewController;
use App\Http\Controllers\SteelController;
use App\Http\Controllers\CivillController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\DashboardHomeController;
use App\Http\Controllers\DashboardTankController;
use App\Http\Controllers\DashboardCivilController;
use App\Http\Controllers\DashboardHeavyController;
use App\Http\Controllers\DashboardScrewController;
use App\Http\Controllers\DashboardSteelController;
use App\Http\Controllers\DashboardWorkshopController;

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

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home"
//     ]);
// });
Route::get('/', [HomeController::class, 'index'] );

Route::get('/about', [AboutController::class, 'index'] );

// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About"
//     ]);
// });

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

Route::get('/workshop', [WorkshopController::class, 'index'] );

// Route::get('/workshop', function () {
//     return view('workshop',[
//         "title" => "Workshop"
//     ]);
// });

// Route::get('/civil', function () {
//     return view('civil',[
//         "title" => "civil"
//     ]);
// });

// Route::get('/heavy', function () {
//     return view('heavy',[
//         "title" => "heavy"
//     ]);
// });

// Route::get('/screw', function () {
//     return view('screw',[
//         "title" => "screw"
//     ]);
// });

// Route::get('/steel', function () {
//     return view('steel',[
//         "title" => "steel"
//     ]);
// });

Route::get('/tanks', [TankController::class, 'index'] );
//halaman single post
Route::get('/tanks/{tank:slug}', [TankController::class, 'show']);

Route::get('/steel', [SteelController::class, 'index'] );
Route::get('/steel/{steel:slug}', [SteelController::class, 'show']);

Route::get('/civil', [CivillController::class, 'index'] );
Route::get('/civil/{civill:slug}', [CivillController::class, 'show']);

Route::get('/screw', [ScrewController::class, 'index'] );
Route::get('/screw/{screw:slug}', [ScrewController::class, 'show']);

Route::get('/heavy', [HeavyController::class, 'index'] );
Route::get('/heavy/{heavy:slug}', [HeavyController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
} )->middleware('auth');

Route::get('/dashboard/tank/checkSlug', [DashboardTankController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/tank', DashboardTankController::class)->middleware('auth');

Route::get('/dashboard/steel/checkSlug', [DashboardSteelController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/steel', DashboardSteelController::class)->middleware('auth');

Route::get('/dashboard/civil/checkSlug', [DashboardCivilController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/civil', DashboardCivilController::class)->middleware('auth');

Route::get('/dashboard/screw/checkSlug', [DashboardScrewController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/screw', DashboardScrewController::class)->middleware('auth');

Route::get('/dashboard/heavy/checkSlug', [DashboardHeavyController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/heavy', DashboardHeavyController::class)->middleware('auth');

Route::resource('/dashboard/home', DashboardHomeController::class)->middleware('auth');

Route::resource('/dashboard/workshop', DashboardWorkshopController::class)->middleware('auth');
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
