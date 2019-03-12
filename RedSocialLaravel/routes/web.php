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
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function(){
	Route::get('/home', 'HomeController@index')->name('home');

	//Rutas para la gestion de "Amigos"
	Route::get('/getAmigos','AmigosController@getAmigos'); //Lleva al método que consigue todos los amigos del usuario que se ha registrado
	Route::get('/findAmigos','UserController@getUserByName'); //Lleva al método que busca usuarios por nombre para, por ejemplo, mandar una solicitud de amistad.
	

	//Rutas para la gestión de usuarios
	Route::get('/getUser/{name}','UserController@getUserByName'); /* Ruta para que un usuario pueda buscar a otros por el nombre
									  y pueda enviar una solicitud de amistad.*/
	Route::get('/usuario'); /*Lleva al formulario donde esta el formulario donde se actualizan los datos del usuario*/								  
	Route::put('/updateUser/{idUsuario}','UserController@updateUser'); /*Ruta que lleva al metodo que actualiza los datos del usuario*/
	Route::delete('/deleteUser/{idUsuario}','UserController@deleteUser'); /*Ruta que lleva al metodo donde se borra el perfil del usuario*/
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

