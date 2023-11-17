<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
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

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/category', [PublicController::class, 'category'])->name('category');
Route::get('/my-library', [PublicController::class, 'myLibrary'])->name('myLibrary');

Route::resource('users', UserController::class);
Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class);
Route::resource('roles', RoleController::class);