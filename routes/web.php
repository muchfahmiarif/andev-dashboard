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
    return view('portal.home');
});

Route::get('/about', function () {
    return view('portal.about');
});

Route::get('/hello', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/registered', [HomeController::class, 'index'])->name('home');
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/home', function() {
    return view('front-view.index');
});

Route::get('/documentation', function() {
    return view('front-view.pages.docs');
});

Route::group(['prefix' => 'development-journey'], function() {
    Route::get('finish-good', function() { return view('front-view.pages.development-journey.finish-good.index'); });
    Route::get('finish-good/detail', function() { return view('front-view.pages.development-journey.finish-good.detail'); });
    Route::get('raw-material', function() { return view('front-view.pages.development-journey.raw-material.index'); });
    Route::get('raw-material/detail', function() { return view('front-view.pages.development-journey.raw-material.detail'); });
    Route::get('mikrobiologi', function() { return view('front-view.pages.development-journey.mikrobiologi.index'); });
    Route::get('mikrobiologi/detail', function() { return view('front-view.pages.development-journey.mikrobiologi.detail'); });
    Route::get('eksternal', function() { return view('front-view.pages.development-journey.eksternal.index'); });
    Route::get('eksternal/detail', function() { return view('front-view.pages.development-journey.eksternal.detail'); });
});

Route::group(['prefix' => 'rpv-riv'], function() {
    Route::get('finish-good', function() { return view('front-view.pages.rpv-riv.finish-good'); });
    Route::get('raw-material', function() { return view('front-view.pages.rpv-riv.raw-material'); });
    Route::get('mikrobiologi', function() { return view('front-view.pages.rpv-riv.mikrobiologi'); });
    Route::get('eksternal', function() { return view('front-view.pages.rpv-riv.eksternal'); });
});

Route::group(['prefix' => 'report-analysis'], function () {
    Route::get('finish-good', function () { return view('front-view.pages.report-analysis.finish-good'); });
    Route::get('raw-material', function () { return view('front-view.pages.report-analysis.raw-material'); });
    Route::get('stabilita', function () { return view('front-view.pages.report-analysis.stabilita'); });
    Route::get('mikrobiologi', function () { return view('front-view.pages.report-analysis.mikrobiologi'); });
});

Route::group(['prefix' => 'lka'], function () {
    Route::get('finish-good', function () { return view('front-view.pages.lka.finish-good'); });
    Route::get('raw-material', function () { return view('front-view.pages.lka.raw-material'); });
    Route::get('stabilita', function () { return view('front-view.pages.lka.stabilita'); });
    Route::get('mikrobiologi', function () { return view('front-view.pages.lka.mikrobiologi'); });
});

Route::group(['prefix' => 'jadwal-stabilita'], function () {
    Route::get('ss-1', function () { return view('front-view.pages.jadwal-stabilita.ss-1'); });
    Route::get('ss-2', function () { return view('front-view.pages.jadwal-stabilita.ss-2'); });
});

Route::group(['prefix' => 'other'], function () {
    Route::get('compliance', function () { return view('front-view.pages.other.compliance'); });
    Route::get('instrument-andev', function() {return view ('front-view.pages.other.instrument-andev');});
});

Route::get('/rear-view', function() {
    return view('rear-view.index');
});

Route::group(['prefix' => 'rear-view/report-analysis'], function () {
    Route::get('finish-good', function () { return view('rear-view.pages.report-analysis.finish-good'); });
    Route::get('raw-material', function () { return view('rear-view.pages.report-analysis.raw-material'); });
    Route::get('stabilita', function () { return view('rear-view.pages.report-analysis.stabilita'); });
    Route::get('mikrobiologi', function () { return view('rear-view.pages.report-analysis.mikrobiologi'); });
});

Route::group(['prefix' => 'rear-view/lka'], function () {
    Route::get('finish-good', function () { return view('rear-view.pages.lka.finish-good'); });
    Route::get('raw-material', function () { return view('rear-view.pages.lka.raw-material'); });
    Route::get('stabilita', function () { return view('rear-view.pages.lka.stabilita'); });
    Route::get('mikrobiologi', function () { return view('rear-view.pages.lka.mikrobiologi'); });
});

Route::group(['prefix' => 'rear-view/jadwal-stabilita'], function () {
    Route::get('ss-1', function () { return view('rear-view.pages.jadwal-stabilita.ss-1'); });
    Route::get('ss-2', function () { return view('rear-view.pages.jadwal-stabilita.ss-2'); });
});