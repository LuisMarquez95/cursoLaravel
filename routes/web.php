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

/*Parametro Obligatorios & Parametros Opcionales*/
/*
 *
 *  Route::get('saludo/{nombre?}', function($nombre = "invitado"){
 *      return "saludos" . $nombre;
 * })
 *
 */
/* Rutas con nombre  (Name Routes)
 *
 *
Route::get('contactanos', function(){
  return 'Hola contactos';
})->name('contactos');
 *
 */
/* Retornar Vistas
 *
 *
 */

Route::view('/', 'home')->name('home');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/mas', 'mas')->name('mas');
Route::get('/nosotros', 'NosotrosController@index')->name('nosotros'); // Ejecutar un Controlador
//Route::resource'nosotros', 'NosotrosController');
