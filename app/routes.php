<?php

/*
|--------------------------------------------------------------------------
|	Rutas del sistema
|--------------------------------------------------------------------------
|	Todas las rutas de nuestro sistema
*/

Route::get('/', function()
{
	return View::make('pages.home');
});

// Nos mostrará la pagina de catalogo de cursos.
Route::get('/catalogo', 'WebController@get_catalogo');
Route::get('/curso', 'WebController@get_curso');
Route::get('/servicios', 'WebController@get_servicio');

// Nos mostrará el formulario de login.
Route::get('/login', 'UserController@get_login');
// Validamos los datos de inicio de sesión.
Route::post('/login', 'UserController@post_login');
// Esta ruta nos servirá para cerrar sesión.
Route::get('/logout', 'UserController@logout');
// Panel del administrador.
Route::get('/paneladmin', 'UserController@panel_admin');

//gestion de usuarios
Route::get('/usuarios', 'UserController@index');
Route::get('/usuarios/create', 'UserController@create');//crear usuario
Route::post('/usuarios/create', 'UserController@store');//procesar la creacion de usuario
Route::get('/usuarios/{id}', 'UserController@show');//Visualizar info del usuario
Route::get('/usuarios/{id}/edit', 'UserController@edit');//Editar usuario
Route::post('/usuarios/{id}/edit', 'UserController@update');//procesar la modificacion
Route::get('/usuarios/delete/{id}', 'UserController@destroy');

//gestion de preinscripciones
Route::get('/preinscritos', 'PreinscritoController@index');
Route::get('/preinscritos/create', 'PreinscritoController@create');//crear usuario
Route::post('/preinscritos/create', 'PreinscritoController@store');//procesar la creacion de usuario
Route::get('/preinscritos/{id}', 'PreinscritoController@show');//Visualizar info del usuario
Route::get('/preinscritos/{id}/edit', 'PreinscritoController@edit');//Editar usuario
Route::post('/preinscritos/{id}/edit', 'PreinscritoController@update');//procesar la modificacion
Route::get('/preinscritos/delete/{id}', 'PreinscritoController@destroy');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
	// Esta será nuestra ruta de bienvenida.
	Route::get('/usuario', function()
	{
		return View::make('usuarios.panel');
	});

});
