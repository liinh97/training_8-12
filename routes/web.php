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

Route::get('/', function () {
    return view('home');
});

Route::post('/login', 'Auth\LoginController@login')->name('frontend.postLogin');

Route::name('frontend.')->namespace('Frontend')->group(function(){
    Route::get('/login', 'UserController@getLogin')->name('getLogin');
    // Route::post('/login', 'UserController@postLogin')->name('postLogin');

    // Route::prefix('users')->middleware('auth:users')->group(function () {
    //     Route::get('/', function(){
    //         return 'hello';
    //     });
    // });
});
// Auth::routes();
