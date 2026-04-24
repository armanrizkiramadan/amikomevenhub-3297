<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/daftar-event', [EventController::class, 'index']);
Route::get('/admin/categories', [CategoryController::class, 'index']);

Route::get('/profil', function () {
    return view('profil');
});
Route::get('/katalog', function () {
    return view('katalog');
});
Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/', function () {
    return view('welcome');


});
