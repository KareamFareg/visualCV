<?php


//ADMIN
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


###############################  Admin Routes  ###########################################################

Route::middleware(['auth:sanctum','authAdmin'])->namespace('App\Http\Controllers\admins')->group(function (){
    Route::get('admin/profile','AdminsController@index')->name('admin.profile');
    Route::get('admin/privileges/edit/{id}/{utype}','PrivilegesController@editUserType')->name('admin.privileges.edit');
    Route::get('admin/privileges/delete/{id}','PrivilegesController@deleteUser')->name('admin.privileges.delete');
});