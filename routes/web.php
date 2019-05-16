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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route for creating and saving car to DB
Route::get('/pages/create', 'CarController@createCar')->middleware('auth');
Route::post('/pages/create', 'CarController@storeCar')->middleware('auth');

Route::get('/pages/view', 'CarController@viewCar');

//route to where a single car's details can be viewed.
Route::get('/pages/details/{id}', 'CarController@detail')->name('details');

//route for editing and updating car details
Route::get('/pages/edit/{id}', 'CarController@editCar')->name('edit');
Route::post('/pages/edit/{id}', 'CarController@updateCar')->name('update');

//route for deleting car
Route::get('/pages/view/{id}', 'CarController@deleteCar')->name('delete');
