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

Route::get('dataproduk', 'DataProdukController@index');
Route::get('/dataproduk/{id}', 'DataProdukController@getId');
Route::post('/dataproduk', 'DataProdukController@create');
Route::put('/dataproduk/update/{id}', 'DataProdukController@update');
Route::delete('/dataproduk/{id}','DataProdukController@delete');

Route::get('bank', 'BankController@index');
Route::get('/bank/{id}', 'BankController@getId');
Route::post('/bank', 'BankController@create');
Route::put('/bank/update/{id}', 'BankController@update1');
Route::delete('/bank/{id}','BankController@delete');
