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
    return view('index');
});

Route::get('merk', 'MerkController@index');
Route::get('mobil', 'MobilController@index');
Route::get('karyawan', 'KaryawanController@index');
Route::get('pelanggan', 'PelangganController@index');
Route::get('transaksi', 'TransaksiController@index');
Route::get('merk/add', 'MerkController@viewInsert');
Route::get('mobil/add', 'MobilController@viewInsert');
Route::get('pelanggan/add', 'PelangganController@viewInsert');
Route::get('karyawan/add', 'KaryawanController@viewInsert');
Route::get('transaksi/add', 'TransaksiController@viewInsert');
Route::post('merk/add', 'MerkController@insert');
Route::post('mobil/add', 'MobilController@insert');
Route::post('pelanggan/add', 'PelangganController@insert');
Route::post('karyawan/add', 'KaryawanController@insert');
Route::post('transaksi/add', 'TransaksiController@insert');
Route::get('merk/update/{id}', 'MerkController@viewUpdate');
Route::get('mobil/update/{id}', 'MobilController@viewUpdate');
Route::get('pelanggan/update/{id}', 'PelangganController@viewUpdate');
Route::get('karyawan/update/{id}', 'KaryawanController@viewUpdate');
Route::get('transaksi/update/{id}', 'TransaksiController@viewUpdate');
Route::post('merk/update/{id}', 'MerkController@update');
Route::post('mobil/update/{id}', 'MobilController@update');
Route::post('pelanggan/update/{id}', 'PelangganController@update');
Route::post('karyawan/update/{id}', 'KaryawanController@update');
Route::post('transaksi/update/{id}', 'TransaksiController@update');
Route::get('merk/delete/{id}', 'MerkController@delete');
Route::get('mobil/delete/{id}', 'MobilController@delete');
Route::get('pelanggan/delete/{id}', 'PelangganController@delete');
Route::get('karyawan/delete/{id}', 'KaryawanController@delete');
Route::get('transaksi/delete/{id}', 'TransaksiController@delete');