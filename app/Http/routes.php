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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('paginas.identidad');
    });
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/politicas', function () {
        return view('paginas.politicas');
    });
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/comunicacion', function () {
        return view('paginas.comunicacion');
    });
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/recursoshumanos', function () {
        return view('paginas.rh.index');
    });
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/recursoshumanos/recibos', function () {
        return view('paginas.rh.recibos');
    });
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/recursoshumanos/vacaciones', function () {
        return view('paginas.rh.vacaciones');
    });
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/admin/usuarios', 'UserController');
    Route::get('/admin/usuarios/logicaldelete/{id}', 'UserController@logicaldelete');
});
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/admin/roles', 'RoleController');
    Route::get('/admin/roles/logicaldelete/{id}', 'RoleController@logicaldelete');
});

Route::auth();

Route::get('/home', 'HomeController@index');
