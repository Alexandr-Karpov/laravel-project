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


Auth::routes();


Route::view('/', 'main.home');

Route::get('/internet', 'Main\Services\InternetController@index');

Route::get('/tv', 'Main\Services\TelevisionController@index');

Route::get('/contract}', 'Profile\ContractController@index');

Route::resource('profile', 'Profile\UserController')->middleware('auth');



Route::name('dashboard.')
    ->namespace('Dashboard')
    ->prefix('dashboard')
    ->group(function () {

        Route::view('/', 'dashboard.index');

        Route::namespace('Users')
            ->group(function () {
                Route::resource('users', 'UserController');
            });

        Route::namespace('Tariffs')
            ->group(function () {
                Route::resource('tariffs', 'TariffController');
            });

        Route::namespace('Contracts')
            ->group(function () {
                Route::resource('contracts', 'ContractController');
            });

        Route::namespace('Payments')
            ->group(function () {
                Route::resource('payments', 'PaymentController');
            });

    });


// role_id:
// 1 - Admin
// 2 - Client
Route::view('/dashboard', 'dashboard.index')->middleware('role:1');



