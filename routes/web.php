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
    return '<img src="images/ERD.png">';
}); // menampilkan gambar ERD pada home root

Route::get('/artikel', 'ArticleController@index')->name('artikel.index'); // menampilkan tabel berisi data artikel-artikel
Route::get('/artikel/create', 'ArticleController@create')->name('artikel.create'); // menampilkan form untuk membuat artikel baru
Route::post('/artikel', 'ArticleController@store')->name('artikel.store'); // menyimpan artikel baru
Route::get('/artikel/{id}', 'ArticleController@show')->name('artikel.show'); // menampilkan halaman detil (show) untuk artikel dengan id tertentu
Route::get('/artikel/{id}/edit', 'ArticleController@edit')->name('artikel.edit'); // menampilkan halaman edit artikel dengan id tertentu
Route::put('/artikel/{id}', 'ArticleController@update')->name('artikel.update');
Route::delete('/artikel/{id}', 'ArticleController@destroy'); // hapus artikel
/*
Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/items', 'ItemController@store'); // menyimpan data
Route::get('/items', 'ItemController@index'); // menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id
Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id
*/
