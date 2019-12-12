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

Route::get('/escolas/', 'apiController@index');
Route::get('/escolas/{escola}','apiController@show');
Route::get('/', function(){
        return view('index');
});


