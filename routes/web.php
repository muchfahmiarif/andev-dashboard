<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::group(['prefix' => 'report-analysis'], function () {
    Route::get('finish-good', function () { return view('pages.report-analysis.finish-good'); });
    Route::get('raw-material', function () { return view('pages.report-analysis.raw-material'); });
    Route::get('stabilita', function () { return view('pages.report-analysis.stabilita'); });
    Route::get('mikrobiologi', function () { return view('pages.report-analysis.mikrobiologi'); });
});