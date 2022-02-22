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
        return view('pages.customer.home');
    });

    Route::get('/register', function () {
        return view('pages.customer.auth.register');
    });
    Route::get('/login', function () {
        return view('pages.customer.auth.login');
    })->name('login');
    Route::get('/register2', function () {
        return view('pages.customer.auth.register2');
    })->name('register2');


    Route::get('/testdashboard', function () {
        return view('layouts.admin');
    })->name('testdashboard');

    Route::get('/email-resend', function () {
        return view('pages.email_resend');
    })->name('email_resend');

    Route::post('/login', 'AuthController@login');
    Route::post('/register2', 'AuthController@register2');

    Route::get('/business/{investment}', 'InvestmentController@show')->name('business_detail');
    Route::get('/business-list', 'InvestmentController@index')->name('business_list');

    Route::get('/investor/add', function () {
        return view('pages.coming_soon');
    })->name('investor_add');

    Route::get('/email/verification/{id}/{hash}', 'AuthController@verify')->middleware(['signed', 'auth'])->name('verification.verify');
});


// login required
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.customer.home');
    })->name('home');


    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/email/verification', function () {
        return view('pages.email_verification');
    });

    // 1 trigger in 2 minutes
    Route::get('/email/verification-notification', 'AuthController@resendVerification')->middleware(['throttle:1,2'])->name('verification.send');

    Route::post('/import', 'InvestmentController@importRegisteredCompany');

    Route::middleware(['verified'])->group(function () {
        Route::get('/investment', function () {
            return view('pages.customer.investment.investment_add');
        });
    });

    Route::post('/investment', 'InvestmentController@store');
});

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.admin.dashboard');
    });
    Route::post('/import/company', 'InvestmentController@importRegisteredCompany');
    Route::get('/export/company', 'InvestmentController@exportRegisteredCompany');
});
