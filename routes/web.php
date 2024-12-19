<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::get('/post/read', [PostController::class, 'read'])->name('post.read');
Route::get('/post/readAll', [PostController::class, 'readAll'])->name('post.readAll');
Route::get('/post/update', [PostController::class, 'update'])->name('post.update');
Route::get('/post/updateAll', [PostController::class, 'updateAll'])->name('post.updateAll');
Route::get('/post/delete', [PostController::class, 'delete'])->name('post.delete');
Route::get('/post/deleteAll', [PostController::class, 'deleteAll'])->name('post.deleteAll');
