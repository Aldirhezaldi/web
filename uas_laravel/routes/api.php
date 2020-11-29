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

Route::get('Bank', 'BankController@index');
Route::get('/Bank/{id_bank}', 'BankController@getid_bank');
Route::post('/Bank', 'BankController@create');
Route::put('/Bank/update/{id_bank}', 'BankController@update');
Route::delete('/Bank/{id_bank}', 'BankController@delete');
