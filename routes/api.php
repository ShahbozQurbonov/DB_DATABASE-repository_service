<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::post('/register', [AuthController::class, 'register']);

// Route::post('/login', [AuthController::class, 'login']);


// Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Route::middleware('auth:sanctum')->get('/user', [AuthController::class, 'userInfo']);

// use App\Http\Controllers\PostController;

// // Post CRUD
// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/posts', [PostController::class, 'index']);
//     Route::post('/posts', [PostController::class, 'store']);
//     Route::get('/posts/{post}', [PostController::class, 'show']);
//     Route::put('/posts/{post}', [PostController::class, 'update']);
//     Route::delete('/posts/{post}', [PostController::class, 'destroy']);
// });


Route::get('posts',[PostController::class,'index']);
Route::post('posts',[PostController::class,'store']);
Route::get('posts/{id}',[PostController::class,'show']);
Route::put('posts/{id}',[PostController::class,'update']);
Route::delete('posts/{id}',[PostController::class,'destroy']);