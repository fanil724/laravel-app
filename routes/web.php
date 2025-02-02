<?php

use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::view('/', 'index')->name('home');
Route::prefix('posts')->group(function () {
    Route::get('/', [PostsController::class, 'index'])->name('posts');
    Route::get('/{id}', [PostsController::class, 'show'])->name('post');
    Route::name('/categories.')->prefix('categories')->group(function () {
        Route::get('/', [CategoriesController::class, 'categories'])->name('categories');
        Route::get('/{id}', [CategoriesController::class, 'category'])->name('category');
    });
});

Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/posts', [AdminController::class, 'posts'])->name('posts');
    Route::get('/post', [AdminController::class, 'show'])->name('post');
    Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
    Route::post('/posts/add', [AdminController::class, 'add'])->name('posts.add');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
