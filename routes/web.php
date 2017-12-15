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

Route::group(['middleware' => ['web']], function(){

	// Here we do a default login accepted by laravel since in the default folder callled AUTH/LOGINCONTROLLER
	//The first 3 are the authentication routes

	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

	Route::post('login', 'Auth\LoginController@login');

	Route::get('logout', 'Auth\LoginController@logout')->name('logout');

	//Registration Routes Here we comment the registration Page BLS the people viewing it dont have to sign

	//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

	//Route::post('register', 'Auth\RegisterController@register');

	// Password Reset

	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    //Controller leading to the front end view
    Route::get('/', 'SolarController@index');
    Route::get('/contact', 'SolarController@contact');
    Route::post('contact', 'SolarController@postContact');
    Route::get('/serve', 'SolarController@services');
    Route::get('serve/{id}', ['as' => 'BME.single-service', 'uses' => 'SolarController@getSingleService'])->where('id', '[\w\d\-\_]+');
    Route::get('/projec', 'SolarController@projects');
    Route::get('projec/{id}', ['as' => 'BME.single-project', 'uses' => 'SolarController@getSingleProject'])->where('id', '[\w\d\-\_]+');
    Route::get('/about', 'SolarController@about');
    Route::get('/team', 'SolarController@team');
    //The controller above controls the main pages for the BME technology especially the SolarController

    /** The below controller works for the backend for English Users**/
    Route::get('/dashboard', 'AdminController@index');
    Route::resource('page', 'PageController');
    Route::resource('client', 'ClientController');
    Route::resource('blog', 'BlogController');
	Route::resource('service', 'ServiceController');
    Route::resource('slide', 'SlideController');
	/** It Ends Here **/
	});