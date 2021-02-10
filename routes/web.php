<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
Route::get('/', [PostController::class, 'index']);
Route::get('/about', [PostController::class, 'about']);
Route::get('/users', [PostController::class, 'users']);
Route::get('/login', [PostController::class, 'login']);
Route::get('/register', [PostController::class, 'register']);
Route::get('/insert', [PostController::class, 'insert']);
// this is the modal
Route::resource('/post', DataController::class);

