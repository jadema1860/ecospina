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
    //return view('welcome');
    return view('inicio');
})->name('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/nosotros', 'paginasController@index')->name('nosotros');
Route::get('/servicios', 'paginasController@servicios')->name('servicios');
Route::get('/proyectos', 'paginasController@proyectos')->name('proyectos');
Route::get('/contactos', 'paginasController@contactos')->name('contactos');
