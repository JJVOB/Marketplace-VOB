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

    return view('/home/index');
});

// Route::get('/home/pagina', 'PaginaController@index')->name('pagina');
Route::get('/home/marketplace', 'MarketplaceController@index')->name('marketplace');

