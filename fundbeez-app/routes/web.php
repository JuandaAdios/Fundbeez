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
Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('pages.customer.register');
    });

    Route::get('/register', function () {
        return view('pages.customer.register');
    });

    Route::get('/login', function () {
        return view('pages.customer.login');
    })->name('login');

    Route::get('/emailsent', function () {
        return view('pages.emailsent');
    })->name('emailsent');

    Route::post('/login', 'AuthController@login');
    Route::post('/register', 'AuthController@register');

    Route::get('/email/verification/{id}/{hash}', 'AuthController@verify')->middleware(['signed', 'auth'])->name('verification.verify');
});


// login required
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.customer.home');
    })->name('home');

    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/email/resend', function () {
        return view('pages.resend_verify');
    });

    // 1 trigger in 2 minutes
    Route::post('/email/verification-notification', 'AuthController@resendVerification')->middleware(['throttle:1,2'])->name('verification.send');

    Route::post('/import', 'InvestmentController@importRegisteredCompany');

    Route::middleware(['verified'])->group(function () {
        Route::get('/investment', function () {
            return view('pages.customer.investment');
        });
    });

    Route::post('/investment', 'InvestmentController@store');
});

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/home', function () {
        return view('pages.admin.dashboard');
    });
    Route::post('/import/company', 'InvestmentController@importRegisteredCompany');
    Route::get('/export/company', 'InvestmentController@exportRegisteredCompany');
});
