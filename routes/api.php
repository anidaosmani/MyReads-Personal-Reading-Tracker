<?php

use App\Http\Controllers\Api\BookApiController;
use Illuminate\Support\Facades\Route;

Route::get('/books', [BookApiController::class, 'index']);
Route::post('/books', [BookApiController::class, 'store']);
Route::delete('/books/{book}', [BookApiController::class, 'destroy']);