<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(["prefix" => 'administrador'], function() {

    Route::get('/cursos/{cualquiera?}', function($any = 'default ') {
        return 'Bienvernido '.$any;
    }) -> where('cualquiera','[A-Za-z0-9.]+');
});

route::get('/cursos/{cualquiera?}', function($any = 'default ') {
    return 'hola '.$any;
});

route::get('/nada', function(){
    return 'nada';
});