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
    return view('welcome');
});

/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */


Route::get('/beranda', 'MasukController@beranda');
Route::get('/utama','MasukController@utama');
Route::get('/tabel','MasukController@tabel');
Route::get('/dashboard','MasukController@dashboard')->middleware('auth');
Route::get('/login','AuthController@login')->name('login');
Route::get('/logout','AuthController@logout');

Route::get('/siswa','SiswaController@index');
Route::post('/siswa/create','SiswaController@create');
Route::get('/siswa/{id}/edit','SiswaController@edit');
Route::post('/siswa/{id}/update','SiswaController@update');
Route::get('/siswa/{id}/delete','SiswaController@delete');
Route::get('/siswa/{id}/profile','SiswaController@profile');
Route::get('/siswa/exportexcel','SiswaController@exportExcel');
Route::get('/siswa/exportpdf','SiswaController@exportPdf');
Route::post('/postlogin','AuthController@postlogin');

Route::get('/guru/{id}/profile','GuruController@profile');