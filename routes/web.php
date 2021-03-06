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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/master', function(){
	return view('layout.master');
});

Route::get('/items', function(){
	return view('items.index');
});

Route::get('/create', function(){
	return view('items.create');
});

Route::get('/', function () {
    return view('tugas.index');
});

Route::get('/data-tables', function () {
    return view('tugas.data-tables');
});