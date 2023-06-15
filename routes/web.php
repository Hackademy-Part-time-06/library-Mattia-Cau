<?php

use App\Http\Controllers\AuthorController;
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


Route::get('/', [BooksController::class, 'index'])->name('books.index');
Route::get('/libri/create', [BooksController::class, 'create'])->name('books.create');
Route::post('/libri/store', [BooksController::class, 'store'])->name('books.store');
Route::get('/libri/{book}/dettagli', [BooksController::class, 'show'])->name('books.show');

Route::get('/libri/{book}/modifica', [BooksController::class, 'edit'])->name('books.edit');
Route::put('/libri/{book}/aggiorna', [BooksController::class, 'update'])->name('books.update');
Route::delete('/libri/{book}', [BooksController::class, 'destroy'])->name('books.destroy');


// Route::resource('books', BooksController::class);
Route::resource('author', AuthorController::class);