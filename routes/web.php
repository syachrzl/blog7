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
Route::get('negarapage/tambah', 'KamarController@tambahnegara');
Route::get('negarapage/store', 'KamarController@store');

Route::resource('article', 'ArticleController');
