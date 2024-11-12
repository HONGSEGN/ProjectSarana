<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
})->name('layouts.index');

Route::get('index', function () {
    return view('calender.index');
})->name('calender.index');

Route::get('index', function () {
    return view('calender.index');
})->name('calender.index');

Route::get('index', function () {
    return view('calender.index');
})->name('calender.index');

Route::get('login', function () {
    return view('auths.login');
})->name('auths.login');

Route::get('register', function () {
    return view('auths.register');
})->name('auths.register');