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

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');

Route::get('/catalogo/{comando?}', 'App\Http\Controllers\CatalogoController@catalogo')->name('catalogo');

Route::get('/nosotros', 'App\Http\Controllers\PagesController@nosotros')->name('nosotros');
