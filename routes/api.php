<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post("auth/registrar","AuthController@registrar");

Route::group(["middleware"=>"api"],function(){
    Route::post("auth/login","AuthController@login");

    Route::get("roles","RolesController@index");

    Route::get("usuarios","UsuariosController@index");
    Route::put("usuarios/{id}","UsuariosController@update");
    Route::delete("usuarios/{id}","UsuariosController@destroy");

    Route::get("clientes","ClientesController@index");
    Route::post("clientes","ClientesController@store");
    Route::delete("clientes/{id}","ClientesController@destroy");
    Route::put("clientes/{id}","ClientesController@update");

    Route::get("medicamentos","MedicamentosController@index");
});
