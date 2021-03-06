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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
    Route::resource('users', 'UsersController');
    Route::resource('schools', 'SchoolsController');
    Route::resource('news', 'NewsController');
    Route::resource('roles', 'RolesController');
    Route::resource('lessons', 'StudentsLessonsController');
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', 'AuthController@login');
        Route::post('signup', 'AuthController@signup');

        Route::group(['middleware' => 'auth:api'], function() {
            Route::get('logout', 'AuthController@logout');
            Route::get('user', 'AuthController@user');
        });
    });
});
