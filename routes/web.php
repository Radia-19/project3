<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserAuthController;

// Home Page
Route::get('/', [HomePageController::class,'index'])->name('home');
Route::get('/about', [HomePageController::class,'about'])->name('about');
Route::get('/course', [HomePageController::class,'course'])->name('course');
Route::get('/contact', [HomePageController::class,'contact'])->name('contact');

// User Authentication
//Route::prefix('user')->group(function () {
    Route::get('login', [UserAuthController::class,'showLogin'])->name('login.show');
    Route::post('login', [UserAuthController::class,'login'])->name('login');
    Route::get('logout', [UserAuthController::class,'logout'])->name('logout');
    Route::get('register', [UserAuthController::class,'showRegister'])->name('register.show');
    Route::post('register', [UserAuthController::class,'register'])->name('register');
//    });

