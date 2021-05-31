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
    return view('homepage');
});
Route::get('kotapage', 'KamarController@kota');

Route::get('desapage', 'KamarController@desa');

Route::get('negarapage', 'KamarController@negara');
Route::get('negarapage/create', 'KamarController@create');
Route::post('negarapage', 'KamarController@store');
Route::get('negarapage/{id}/edit', 'KamarController@edit');
Route::patch('negarapage/{id}', 'KamarController@update');
Route::delete('negarapage/{id}', 'KamarController@destroy');

Route::resource('article', 'ArticleController');
