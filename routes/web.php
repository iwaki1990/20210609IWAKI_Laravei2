<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

Route::get('/board', [BoardController::class, 'index']);
Route::get('/board/add', [BoardController::class, 'add']);
Route::post('/board/add', [BoardController::class, 'create']);
Route::get('/person', [PersonController::class, 'index']);