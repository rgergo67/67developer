<?php

use Illuminate\Support\Facades\Cookie;
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
    Route::view('credits', 'credits')->name('credits');
    Route::view('k', 'xmas_countdown')->name('xmas_countdown');
    Route::get('/blog', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
    Route::get('/blog/{post}/{slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

    Route::view('/ingyenes-online-eszkozok', 'tools.index')->name('tools.index');
});

Route::view('/online-szoveg-osszehasonlitas', 'tools.text-compare')->name('tools.text-compare-hu');
Route::view('/online-text-compare', 'tools.text-compare')->middleware('english')->name('tools.text-compare-en');
Route::post('/online-szoveg-osszehasonlitas', \App\Http\Controllers\Tools\TextCompareController::class)->name('tools.text-compare');


Route::get('language/{lang}', function ($lang) {
    Cookie::queue('locale', $lang, 60 * 24 * 365);

    return back();
})->name('langroute');

Route::get('en', function () {
    Cookie::queue('locale', 'en', 60 * 24 * 365);

    return redirect('/');
});
