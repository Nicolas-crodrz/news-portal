<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


Route::get('/', function () {
    return view('auth.login');
})->name('login');
Auth::routes();
Route::resource('news', NewsController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('/news/{id}', 'NewsController@destroy')->name('news.destroy');


