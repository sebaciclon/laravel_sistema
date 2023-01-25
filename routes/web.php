<?php

use Illuminate\Support\Facades\Route;

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

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages

// esto quiere decir que si no estas logueado no podes entrar a estas rutas. se queda en el login
// no se puede entrar por la URL
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
$controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');


    // la ruta usuarios va a ir al $controller_path ('App\Http\Controllers'), va a buscar la carpeta pages, dentro de esta
    // va a buscar el controlador UsuariosController, y dentro de este la funcion index 
    // RUTAS DE USUARIOS
    Route::get('/usuarios', $controller_path . '\pages\UsuariosController@index')->name('pages-usuarios');
    Route::get('/usuarios/crear', $controller_path . '\pages\UsuariosController@create')->name('pages-usuarios-crear');
    Route::post('/usuarios/guardar', $controller_path . '\pages\UsuariosController@store')->name('pages-usuarios-guardar');
    Route::get('/usuarios/mostrar/{usuario_id}', $controller_path . '\pages\UsuariosController@show')->name('pages-usuario-mostrar');
    Route::post('/usuarios/actualizar', $controller_path . '\pages\UsuariosController@update')->name('pages-usuarios-actualizar');
    Route::get('/usuarios/eliminar/{usuario_id}', $controller_path . '\pages\UsuariosController@destroy')->name('pages-usuarios-eliminar');

    // RUTAS DE EXPEDIENTES
    //Route::get('/expedientes', $controller_path . '\pages\ExpedienteController@index')->name('pages-expedientes');
    //Route::get('/expedientes/crear', $controller_path . '\pages\ExpedienteController@create')->name('pages-expedientes-crear');
    //Route::post('/expedientes/guardar', $controller_path . '\pages\ExpedienteController@store')->name('pages-expedientes-guardar');
    //Route::get('/expedientes/mostrar/{expediente_id}', $controller_path . '\pages\ExpedienteController@show')->name('pages-expedientes-mostrar');
    //Route::post('/expedientes/actualizar', $controller_path . '\pages\ExpedienteController@update')->name('pages-expedientes-actualizar');
    //Route::get('//expedientes/{expediente_id}', $controller_path . '\pages\ExpedienteController@destroy')->name('pages-expedientes-eliminar');

    // RUTAS DE CONTRIBUYENTES
    Route::get('/contribuyentes', $controller_path . '\pages\ContribuyenteController@index')->name('pages-contribuyentes');
    Route::get('/contribuyentes/crear', $controller_path . '\pages\ContribuyenteController@create')->name('pages-contribuyentes-crear');
    Route::post('/contribuyentes/guardar', $controller_path . '\pages\ContribuyenteController@store')->name('pages-contribuyentes-guardar');
    Route::get('/contribuyentes/mostrar/{contribuyente_id}', $controller_path . '\pages\ContribuyenteController@show')->name('pages-contribuyente-mostrar');
    Route::post('/contribuyentes/actualizar', $controller_path . '\pages\ContribuyenteController@update')->name('pages-contribuyentes-actualizar');
    Route::get('//contribuyentes/{contribuyente_id}', $controller_path . '\pages\ContribuyenteController@destroy')->name('pages-contribuyentes-eliminar');

    // RUTAS DE REPORTES
    //Route::get('/reportes', $controller_path . '\pages\ReporteController@index')->name('pages-reportes');
    //Route::get('/reportes/crear', $controller_path . '\pages\ReporteController@create')->name('pages-reportes-crear');
    //Route::post('/reportes/guardar', $controller_path . '\pages\ReporteController@store')->name('pages-reportes-guardar');
    //Route::get('/reportes/mostrar/{reporte_id}', $controller_path . '\pages\ReporteController@show')->name('pages-reportes-mostrar');
    //Route::post('/reportes/actualizar', $controller_path . '\pages\ReporteController@update')->name('pages-reportes-actualizar');
    //Route::get('//reportes/{reporte_id}', $controller_path . '\pages\ReporteController@destroy')->name('pages-reportes-eliminar');
});
