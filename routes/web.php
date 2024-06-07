<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;



Route::get('/', function () {
  return view('auth.login');
})->name('login');

Auth::routes();
Route::resource('news', NewsController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('/news/{id}', 'NewsController@destroy')->name('news.destroy');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create')->middleware('auth');


Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index')->middleware('auth');

Route::resource('users', UserController::class);


// route admin, admin this layouts folder
Route::get('/admin', function () {
  return view('layouts.admin');
})->name('admin')->middleware('auth');
