<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Auth\AuthController@getLogin');

// Route Auth
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');

Route::group(['middleware' => 'auth'], function() {

    Route::get('dashboard', 'DashboardController@index');

    Route::resource('card', 'CardController');
    Route::get('card/delete/{id}', ['as' => 'card.delete', 'uses' => 'CardController@delete']);

    Route::resource('classes', 'ClassesController');
    Route::get('classes/delete/{id}', ['as' => 'classes.delete', 'uses' => 'ClassesController@delete']);

    Route::resource('locker', 'LockerController');
    Route::get('locker/delete/{id}', ['as' => 'locker.delete', 'uses' => 'LockerController@delete']);

    Route::resource('payment', 'PaymentController');
    Route::get('payment/delete/{id}', ['as' => 'payment.delete', 'uses' => 'PaymentController@delete']);

    Route::resource('registration', 'RegistrationController');
    Route::get('registration/delete/{id}', ['as' => 'registration.delete', 'uses' => 'RegistrationController@delete']);
    Route::post('registration/ajax_card', ['as' => 'registration.ajax_card', 'uses' => 'RegistrationController@delete']);

    Route::resource('extension', 'ExtensionController');
    Route::get('extension/delete/{id}', ['as' => 'extension.delete', 'uses' => 'ExtensionController@delete']);

    Route::resource('absent', 'AbsentController');
    Route::get('absent/delete/{id}', ['as' => 'absent.delete', 'uses' => 'AbsentController@delete']);

    Route::get('logout', 'Auth\AuthController@getLogout');
    
});


