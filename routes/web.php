<?php

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

Route::get('/', 'LoginController@login');
Route::get('register_supper_admin', 'LoginController@register_supper_admin');
Route::get('add_supper_admin', 'LoginController@add_supper_admin');
Route::post('check_auth', 'LoginController@check_auth');
Route::get('dashbord', 'DashbordController@dashbord');
Route::get('departments', 'UserController@departments');
Route::get('users', 'UserController@users');
