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

// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');


Auth::routes(['register' => false]);

Route::get('/{any}', 'HomeController@index')->where('any', '.*');


// Authenticated Routes

// Route::group(['middleware' => 'admin'], function () {

//     Route::get('/user', 'UserController@index')->name('user');
//     Route::get('/user/add', 'UserController@add')->name('user.add');
//     Route::post('/user/store', 'UserController@store')->name('user.store');
//     Route::get('/user/show/{id}', 'UserController@show')->name('user.show');
//     Route::get('/user/destroy/{id}', 'UserController@destroy')->name('user.destroy');
//     Route::post('/user/update/{id}', 'UserController@update')->name('user.update');

// });



