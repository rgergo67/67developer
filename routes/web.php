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

Route::group(['middleware' => ['page-cache']], function () {
    Route::view('/', 'welcome')->name('welcome');
    Route::view('/en', 'welcome')->middleware('english')->name('welcome-en');
    Route::view('credits', 'credits')->name('credits');
});

Route::view('/online-szoveg-osszehasonlitas', 'tools.text-compare')->name('tools.text-compare-hu');
Route::view('/online-text-compare', 'tools.text-compare')->middleware('english')->name('tools.text-compare-en');
Route::post('/online-szoveg-osszehasonlitas', \App\Http\Controllers\Tools\TextCompareController::class)->name('tools.text-compare');
