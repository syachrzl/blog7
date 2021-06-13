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

//---Home Page
Route::get('/', function () {
    return view('homepage');
});
Route::get('kotapage', 'KotaController@kota');

Route::get('desapage', 'DesaController@desa');

Route::get('negarapage', 'NegaraController@negara');
Route::get('negarapage/create', 'NegaraController@create');
Route::post('negarapage', 'NegaraController@store');
Route::get('negarapage/{id}/edit', 'NegaraController@edit');
Route::patch('negarapage/{id}', 'NegaraController@update');
Route::delete('negarapage/{id}', 'NegaraController@destroy');

Route::resource('article', 'ArticleController');
