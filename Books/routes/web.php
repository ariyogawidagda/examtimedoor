<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\RatingController;
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
// menampilkan halaman list book
Route::get('/', [BookController::class, 'index']);
// menampilkan halaman famousauthor
Route::get('/authors', [AuthorController::class, 'index']);
// menampilkan halaman form input rating
Route::get('/createrating', [RatingController::class, 'index']);
// untuk menyimpan data
Route::post('/insertrating', [RatingController::class, 'store']);
// menampilkan list dan search pada tabel
Route::post('/viewtabel', [BookController::class, 'show']);
