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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return "You hit /users";
});

Route::get('/users/new', function () {
 return view('users.new');
});

Route::post('/users/new', 'UsersController@create');

Route::get('users/{id}', function ($id) {
    return view('users.show', ['id' => $id]);
});
