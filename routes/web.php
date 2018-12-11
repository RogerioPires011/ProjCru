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

Route::get('/welcome', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@logado')->name('home');


Route::get('/lista', 'ClientesController@index')->name('home');
Route::get('clientes/novo', 'ClientesController@novo');
