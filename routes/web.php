<?php


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/nombre',function(){
// 	return view('main');
// });

Route::view('/', 'main');
Route::view('index', 'index');
Route::view('acerca', 'about');

// Route::get('usuario/{nombre?}', function ($nombre='Juan') {
//     return view('main',['name' => $nombre]);
// });

Route::resource('clientes','ClientesController');
Route::resource('productos','ProductosController');

// Route::post('clientes/actualizar','ClientesController@update');

