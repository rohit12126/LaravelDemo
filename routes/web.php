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
Route::get('/', 'HomeController@index')->name('behindthescreen');

Auth::routes();
Route::group(['middleware' => 'auth'], function() {
	
	Route::get('/behindthescreen', 'HomeController@index')->name('behindthescreen');
	Route::get('/adminProfile', 'HomeController@adminProfile')->name('adminProfile');
	Route::post('/updateAdminProfile', 'HomeController@updateAdminProfile')->name('updateAdminProfile');
	Route::get('/changePassword', 'HomeController@changePassword')->name('changePassword');
	Route::post('/updatePassword', 'HomeController@updatePassword')->name('updatePassword');
	
	Route::resource('category', 'CategoryController');
	Route::get('/getCategoriesData', 'CategoryController@getCategoriesData')->name('getCategoriesData');

	Route::get('/setting', 'SettingController@index')->name('setting.index');
	Route::post('/setting/save', 'SettingController@save')->name('setting.save');
	
	Route::resource('emails', 'EmailTemplateController');
	Route::get('/getEmailsData', 'EmailTemplateController@getEmailsData')->name('getEmailsData');	
});

Route::get('category_name', 'CategoryController@getName');
