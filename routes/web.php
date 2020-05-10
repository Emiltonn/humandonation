<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\CheckVerificationAccount;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('ong')->group(function () {
    Route::get('/', function () {
        return view('ong.home');
    })->middleware('check.account');
    Route::get('grantees', function () {
        return view('ong.grantee');
    });
    Route::get('donations', function () {
        return view('ong.donation');
    });
    Route::get('volunteers', function () {
        return view('ong.volunteer');
    });
    Route::get('support', function () {
        return view('ong.support');
    });
    Route::get('settings', function () {
        return view('ong.settings');
    });
});
    Route::get('activation', function () {
        return view('activation');
    });

Route::get('starterpage', function () {
    return view('layouts.starterpage');
})->middleware('check.account');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('check.account');
