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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','App\Http\Controllers\HomeController@index');
Route::post('/new_de','App\Http\Controllers\FrontController@new_de');
Route::get('/ulogin','App\Http\Controllers\FrontController@user_login');
 Route::POST('/user_login','App\Http\Controllers\FrontController@user_login_det');
    Route::get('/user_dashboard','App\Http\Controllers\FrontController@user_dashboard');
    Route::get('/user/logout','App\Http\Controllers\FrontController@logout');
    Route::GET('/user/view_record/','App\Http\Controllers\FrontController@view_record');
    Route::POST('/user/update/','App\Http\Controllers\FrontController@user_update_data');
     Route::GET('/user_sub/','App\Http\Controllers\FrontController@user_user_sub');
       Route::POST('/payment/','App\Http\Controllers\FrontController@payment');


Route::prefix('admin')->group(function () {
    Route::get('/','App\Http\Controllers\AdminController@index');
    Route::POST('/login','App\Http\Controllers\AdminController@admin_login');
    Route::GET('/view_record','App\Http\Controllers\AdminController@view_record');
    Route::get('/dashboard','App\Http\Controllers\AdminController@dashboard');
    Route::get('/logout','App\Http\Controllers\AdminController@logout');
});
 