<?php

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
|
| Here is where you can register front routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function(){
	return view('front.dashboard.home');
}); */

Route::get('/login/user', 'Auth\LoginController@showFrontUserLoginForm');

Route::get('/register/user', 'Auth\RegisterController@showFrontUserRegisterForm');

Route::post('/login/user', 'Auth\LoginController@frontUserLogin')->name('login.user');
Route::post('/register/user', 'Auth\RegisterController@createFrontUser');

Route::group(['middleware' => 'auth'], function() {
	Route::get('/yes', function(){
		echo 4243543;die;
	});
});
