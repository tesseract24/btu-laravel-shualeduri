<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\BooksController@indexpub')->name('adminindex');


Route::get('/admin', 'App\Http\Controllers\BooksController@index')->name('adminindex');


Route::get('/admin/create', 'App\Http\Controllers\BooksController@create')->name('admincreate');


Route::post('/admin/store', 'App\Http\Controllers\BooksController@store')->name('adminstore');


Route::post('/admin/destroy', 'App\Http\Controllers\BooksController@destroy')->name('admindestroy');


Route::get('/admin/show/{id}', 'App\Http\Controllers\BooksController@show')->name('adminshow');

