<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [ProductController::class, 'index']);
// Route::get('/product/{id}', [ProductController::class, 'show']);



// Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
// Route::post('/user/store', [UserController::class, 'store'])->name('user.store');


// Route::get('/admin/create', [AdminController::class, 'create']);
// Route::post('/admin/store', [AdminController::class, 'store']);

Route::get('/', function () {
    return view('home');
});
