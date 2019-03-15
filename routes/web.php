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
    return view('dashboard');
});
Route::get('/hash-table', 'HashTableController@index');
Route::get('/import', 'HashTableController@import');
Route::get('/get-list', 'HashTableController@getIndex')->name('get-list');
Route::get('/any-data', 'HashTableController@anyData')->name('any-data');

Route::post('import-data','HashTableController@importData')->name('import-data');

