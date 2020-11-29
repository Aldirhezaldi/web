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

Route::get('mapel', 'MapelController@index');

Route::get('/mapel/{id_mapel}', 'MapelController@getId');

Route::post('/mapel', 'MapelController@create');

Route::put('/mapel/update/{id_mapel}', 'MapelController@update');

Route::delete('/mapel/{id_mapel}', 'MapelController@delete');
