<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts/store',[PostController::class,'store'])->name('posts.store');
Route::get('/posts',[PostController::class,'show'])->name('posts.show');
Route::post('/posts/{id}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::patch('/posts/update/{id}',[PostController::class,'update'])->name('posts.update');
Route::delete('/posts/destroy/{id}',[PostController::class,'destroy'])->name('posts.destroy');




