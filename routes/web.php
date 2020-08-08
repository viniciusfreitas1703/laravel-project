<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'ClienteController@store');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'Usercontroller@index');

Route::get('/cadastro-de-cliente', function(){
    return view('page-login');
});

