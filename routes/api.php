<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\http\controllers\ComentariosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('wos','ComentariosController@hola');

Route::get('fer/{nombre}/{sexo}/{edad}','wos\arjon@papo')
->name('saludo')
->where(['edad'=>'[0-9]+','nombre'=>'[a-z A-Z]+','sexo'=>'[F,M]']);

Route::get('ayon','wos\arjon@mayela');

Route::get('articulos/{Id}/comentarios','ComentariosController@soso');

Route::get('articulos/jazmin','ComentariosController@rube');


