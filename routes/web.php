<?php

use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/shows', [ShowController::class, 'home']);
Route::get('/api/shows', [ShowController::class, 'index']);