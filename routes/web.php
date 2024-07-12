<?php

use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\dashboard\UserDataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('dashboard')->name('dashboard.')->group( function () {
     //user
     Route::prefix('user')->name('user.')->group( function () {
        Route::controller(UserController::class)->group( function () {
            Route::get('/index' , 'index')->name('index');
            Route::get('/create' , 'create')->name('create');
            Route::post('/store' , 'store')->name('store');
            Route::get('/edit/{id}' , 'edit')->name('edit');
            Route::post('/update/{id}' , 'update')->name('update');
            Route::get('/delete/{id}' , 'delete')->name('delete');
        });
    }); // End of user
      //user data
      Route::prefix('userData')->name('userData.')->group( function () {
        Route::controller(UserDataController::class)->group( function () {
            Route::get('/index' , 'index')->name('index');
            Route::get('/create' , 'create')->name('create');
            Route::post('/store' , 'store')->name('store');
            Route::get('/edit/{id}' , 'edit')->name('edit');
            Route::post('/update/{id}' , 'update')->name('update');
            Route::get('/delete/{id}' , 'delete')->name('delete');
        });
    }); // End of user data


});
Route::prefix('userprofile')->name('userprofile.')->group( function () {
    Route::controller(UserProfileController::class)->group( function () {
        Route::get('index/{name}' , 'index')->name('index');
        Route::get('edit/{name}' , 'edit')->name('edit');
        Route::post('update/{name}' , 'update')->name('update');
    });
}); // End of user profile
