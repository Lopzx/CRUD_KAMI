<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BookController::class, 'getBooks'])->name("getBooks");
Route::get('/create', [BookController::class, "createMainPage"])->name("createMainPage");
Route::post("/create", [BookController::class, "addBook"])->name("addBook");
Route::get("/update-book/{id}", [BookController::class, 'getBookById'])->name("getBookById");
Route::patch("/update-book/{id}", [BookController::class, 'updateBook'])->name("updateBook");
Route::delete("/delete-book/{id}", [BookController::class, 'deleteBook'])->name("deleteBook");
