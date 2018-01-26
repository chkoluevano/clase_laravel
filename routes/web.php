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

Route::get('/', 'PagesController@index');

Route::get('messages/{mensaje}', 'PagesController@showMessage');
/**
 * Ruta acerca de nosotros
 */

Route::get('/acerca', 'PagesController@acercaDe');

/**
 * Ruta de listados
 */
Route::get('/articulos','PagesController@articulos');

/**
 * ruta con parametro
 */

Route::get('/articulo/{id}', 'PagesController@detalleArticulo');

/**
 * Ruta con multipes parametros
 */

 Route::get('/articulo/{id}/{value}', 'PagesController@multipleParams');

/**
 * Ruta con 3 valores
 */
Route::get('/articulo/{id}/{value}/{key}',function($id, $v, $k){
    return "detalle con articulo: {$id} , value: {$v} y key: {$k}";
});

/**
 * Ruta con valor opcional
 */

 Route::get('/usuario/{nombre?}', 'PagesController@Opcional');


/**
 * Ruta con validaciones regex
 */
Route::get('/user/{id}', 'PagesController@validacionRegex')->where('id', '[0-9]+');
 
/**
 * Ruta con validaciones regex II
 */

Route::get('user/{name}',function($name){
    return $name;
})->where('name','[A-Za-z]+');


/**
 * Ruta con multiples regex III
 */
Route::get('article/{id}/{valor}','PagesController@multipleValidations')->where(['id' =>'[0-9]+','valor'=>'[A-Za-z]+']);