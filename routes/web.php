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



Route::group(['namespace' => 'App\Http\Controllers'],function (){
    Route::get('/','HomeController@index')->name('home');
    Route::get('home','HomeController@index');
});

Route::middleware(['auth:sanctum' ])->namespace('App\Http\Controllers\users')->group(function () {
    Route::get('account/settings','UsersController@edit')->name('user.edit');
    Route::post('account/settings','UsersController@updated')->name('user.update');
});
Route::middleware(['auth:sanctum' ])->namespace('App\Http\Controllers')->group(function () {
    Route::post('account/password', 'PasswordController@changePassword')->name('password.update');
    Route::get('account/password', 'PasswordController@passEdit')->name('password.edit');
});


