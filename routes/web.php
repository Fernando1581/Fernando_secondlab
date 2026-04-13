<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::post('/store', [TodoController::class, 'store']);
Route::get('/edit/{todo}', [TodoController::class, 'edit']);
Route::post('/update/{todo}', [TodoController::class, 'update']);
Route::post('/delete/{todo}', [TodoController::class, 'destroy']);
