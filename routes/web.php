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
Route::get('/', 'HomeController@view');
Route::get('/restaurants/{prefecture}','HomeController@show')-> name('restaurants');
Route::get('/posts/{id}','HomeController@index') -> name('index');
//Route::get('create', 'HomeController@create');
//Route::post('/restaurants', 'HomeController@store');
?>