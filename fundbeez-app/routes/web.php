<?php

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

// public route

// Email Verification Routes...
// Route::get('/email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('/email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::get('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/register', function () {
        return view('register');
    });

    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/login', 'AuthController@login');
    Route::post('/register', 'AuthController@register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/logout', 'AuthController@logout')->name('logout');
});

// login required

