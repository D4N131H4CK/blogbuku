<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\BookController;

// Menambahkan name 'home' untuk route utama
Route::get('/', function () {
    return view('landing');
})->name('home');

// Route untuk setiap buku
Route::get('/book1', [BookController::class, 'book1'])->name('book1');
Route::get('/book2', [BookController::class, 'book2'])->name('book2');
Route::get('/book3', [BookController::class, 'book3'])->name('book3');
Route::get('/book4', [BookController::class, 'book4'])->name('book4');

// Route tambahan jika diperlukan
Route::get('/admin/register', [AdminController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register']);

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});