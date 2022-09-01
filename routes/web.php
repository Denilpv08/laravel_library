<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EditorialController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('books')->group(function(){
    Route::get('/', [BookController::class, 'index'])->name('books.index');
    Route::get('/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/store', [BookController::class, 'store'])->name('books.store');
    Route::get('/show/{id}', [BookController::class, 'show'])->name('books.show');
    Route::get('/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/update/{id}', [BookController::class, 'update'])->name('books.update');
    Route::delete('/destroy/{id}', [BookController::class, 'destroy'])->name('books.destroy');
});

Route::prefix('editorials')->group(function(){
    Route::get('/', [EditorialController::class, 'index'])->name('editorials.index');
    Route::get('/create', [EditorialController::class, 'create'])->name('editorials.create');
    Route::post('/store', [EditorialController::class, 'store'])->name('editorials.store');
    Route::get('/show/{id}', [EditorialController::class, 'show'])->name('editorials.show');
    Route::get('/edit/{id}', [EditorialController::class, 'edit'])->name('editorials.edit');
    Route::put('/update/{id}', [EditorialController::class, 'update'])->name('editorials.update');
    Route::delete('/destroy/{id}', [EditorialController::class, 'destroy'])->name('editorials.destroy');
});

Route::prefix('categories')->group(function(){
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/show/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

Route::prefix('authors')->group(function(){
    Route::get('/', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('/create', [AuthorController::class, 'create'])->name('authors.create');
    Route::post('/store', [AuthorController::class, 'store'])->name('authors.store');
    Route::get('/show/{id}', [AuthorController::class, 'show'])->name('authors.show');
    Route::get('/edit/{id}', [AuthorController::class, 'edit'])->name('authors.edit');
    Route::put('/update/{id}', [AuthorController::class, 'update'])->name('authors.update');
    Route::delete('/destroy/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
