<?php

use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::view('/', 'index')->name('home');
Route::prefix('posts')->group(function () {
    Route::name('')->prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('category');
    });
    Route::get('/', [PostsController::class, 'index'])->name('posts');
    Route::get('/{post}', [PostsController::class, 'show'])->name('post');
    
});
Route::post('posts/{id}/add/like', [PostsController::class, 'addLike'])->name('posts.like.add');
Route::name('admin.')->middleware(['auth','is_admin'])
->prefix('admin')->group(function () {
    Route::get('/', [AdminIndexController::class, 'index'])->name('index');
    Route::name('posts.')->prefix('posts')->group(function () {        
        Route::get('/', [AdminPostController::class, 'index'])->name('index');
        Route::get('/create', [AdminPostController::class, 'create'])->name('create');
        Route::post('/store', [AdminPostController::class, 'store'])->name('store');
        Route::get('/{post}/edit', [AdminPostController::class, 'edit'])->name('edit');
        Route::put('/update/{post}', [AdminPostController::class, 'update'])->name('update');
        Route::delete('/destroy/{post}', [AdminPostController::class, 'destroy'])->name('destroy');
        Route::get('/{post}', [AdminPostController::class, 'show'])->name('show');
    });
    Route::name('categories.')->prefix('categories')->group(function () {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('index');        
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('create');
        Route::post('/store', [AdminCategoryController::class, 'store'])->name('store');
        Route::get('/{category}/edit', [AdminCategoryController::class, 'edit'])->name('edit');
        Route::put('/update/{category}', [AdminCategoryController::class, 'update'])->name('update');
        Route::delete('/destroy/{category}', [AdminCategoryController::class, 'destroy'])->name('destroy');
        Route::get('/{category}', [AdminCategoryController::class, 'show'])->name('show');
    });
});

Auth::routes();

