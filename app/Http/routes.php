<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('paginas.identidad');
});
Route::get('/politicas', function () {
    return view('paginas.politicas');
});
Route::get('/comunicacion', function () {
    return view('paginas.comunicacion');
});
Route::get('/recursoshumanos', function () {
    return view('paginas.rh.index');
});
Route::get('/recursoshumanos/recibos', function () {
    return view('paginas.rh.recibos');
});
Route::get('/recursoshumanos/vacaciones', function () {
    return view('paginas.rh.vacaciones');
});

Route::auth();

Route::get('/home', 'HomeController@index');
