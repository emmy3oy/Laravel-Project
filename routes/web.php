<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('posts.index');
})->name('home');

// Register
Route::get('/register', [AuthController::class, 'register'])
    ->name('register');

Route::post('/register', [AuthController::class, 'store'])
    ->name('register.store');

// Login
Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

Route::post('/login', [AuthController::class, 'authenticate'])
    ->name('login.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

//Categories

Route::middleware('auth')->group(function () {

    Route::resource('categories', CategoryController::class);

});

Route::get('/products', function () {
    return view('products.index');
});

Route::get('/books', function () {
    return view('books.index');
});