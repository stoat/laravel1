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
//Route::post('car/edit', 'CarController@edit')->name('car.edit');
//Route::post('car/store', 'CarController@store')->name('car.store');
Route::resources([
	'car'=>'CarController',
    'part'=>'PartController'
]);
Route::get('car/{id}',function($id){
	return view('');
});

/*
Route::get('car', 'CarsController@index')->name('car.index');
Route::get('car', 'CarsController@create')->name('car.create');
Route::post('car', 'CarsController@store')->name('car.store');

*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
