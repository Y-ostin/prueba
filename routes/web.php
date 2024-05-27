<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\SiteController::class, 'home'])->name('home');
Route::get('/welcome', [App\Http\Controllers\SiteController::class, 'welcome'])->name('welcome');

Route::get('/inicio', function () {
    return view('vista');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/index', function () {
    return view('index');
});
