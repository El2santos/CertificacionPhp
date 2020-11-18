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




Auth::routes();
Route::resource('clientes', 'ClientesController')->middleware('auth');
Route::resource('proveedores', 'ProveedoresController')->middleware('auth');
Route::resource('frutas', 'FrutaController')->middleware('auth');
Route::get('/home', 'ClientesController@index')->middleware('auth');
Route::get('/', 'ClientesController@index')->middleware('auth');
