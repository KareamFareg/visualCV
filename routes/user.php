<?php

//USERS

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded  'verified'by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

###############################  User Routes  ###########################################################

Route::middleware(['auth:sanctum','authUser'])->namespace('App\Http\Controllers\users')->group(function () {
    Route::get('user/profile','UsersController@index')->name('user.profile');
});


