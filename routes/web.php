<?php

use App\Http\Controllers\BooksController;
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





Route::get('/libri', [BooksController::class, 'index'])->name('books.index');
Route::get('/libri/create', [BooksController::class, 'create'])->name('books.create');
Route::post('/libri/store', [BooksController::class, 'store'])->name('books.store');
Route::get('/libri/{book}/dettagli', [BooksController::class, 'show'])->name('books.show');