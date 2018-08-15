<?php


Auth::routes();
Route::view('/', 'welcome');
Route::view('index', 'index');
Route::view('acerca', 'about');



Route::resource('clientes','ClientesController');
Route::resource('productos','ProductosController');



Route::get('/home', 'HomeController@index')->name('home');


