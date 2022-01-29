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

Route::middleware(['auth:sanctum','authUser'])->namespace('App\Http\Controllers\cv')->group(function () {
    Route::get('cv/{title?}','CvController@index')->name('cv');
    Route::post('cv','CreateCvController@createCV');
    Route::get('createCV','CreateCvController@create')->name('createCV');
    Route::get('editCV/{id}','EditCvController@edit')->name('editCV');
    Route::post('editCV/{id}','EditCvController@updated');
    Route::get('CVSelection','CvController@selection')->name('cvselection');
    Route::get('cv/delete/{id}','CvController@deleteCV')->name('cv.delete');
    Route::get('cv/download/{id}','CvController@download')->name('cv.download');

});

