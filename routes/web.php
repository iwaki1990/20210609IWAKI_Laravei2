<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SessionController;



Route::get('/board', [BoardController::class, 'index']);
Route::get('/board/add', [BoardController::class, 'add']);
Route::post('/board/add', [BoardController::class, 'create']);
Route::get('/person', [PersonController::class, 'index']);
Route::get('/session', [SessionController::class, 'ses_get']);
Route::post('/session', [SessionController::class, 'ses_put']);
Route::get('/person', [PersonController::class, 'index']);