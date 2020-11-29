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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bank', 'BankController@home');
Route::get('/bank/tambah', 'BankController@tambah');
Route::post('/bank/simpan', 'BankController@simpan');
Route::get('/bank/detail/{id}', 'BankController@detail');
Route::get('/bank/edit/{id}', 'BankController@edit');
Route::post('/bank/update', 'BankController@update');
Route::get('/bank/hapus/{id}', 'BankController@hapus');

Route::get('/produk', 'DataProdukController@home');
Route::get('/produk/tambah', 'DataProdukController@tambah');
Route::post('/produk/simpan', 'DataProdukController@simpan');
Route::get('/produk/detail/{id}', 'DataProdukController@detail');

Route::get('/invoice', 'InvoiceController@home');
Route::get('/invoice/detail/{id}', 'InvoiceController@detail');
Route::get('/invoice/hapus/{id}', 'InvoiceController@hapus');

Route::get('/dashboard', 'DashboardController@index');

Route::resource('file', 'File');
