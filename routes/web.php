<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SectionController;

// Homepage redirect to books
Route::get('/', function () {
    return redirect()->route('books.index');
});

// Resource routes for CRUD
Route::resource('books', BookController::class);
Route::resource('sections', SectionController::class);