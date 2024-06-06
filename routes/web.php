<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
  return view('auth.login');
})->name('login');
Auth::routes();
Route::resource('news', NewsController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('/news/{id}', 'NewsController@destroy')->name('news.destroy');
// route admin, admin this layouts folder
Route::get('/admin', function () {
  return view('layouts.admin');
})->name('admin')->middleware('auth');
