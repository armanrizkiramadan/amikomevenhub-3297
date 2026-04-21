<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/daftar-event', [EventController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
