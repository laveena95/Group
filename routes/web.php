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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin', 'AdminController@index');
Auth::routes(['verify' => true]);

// mobile verification
Route::get('/verify', 'verifyController@getVerify')->name('getverify');
Route::post('/verify','verifyController@postVerify')->name('verify');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
