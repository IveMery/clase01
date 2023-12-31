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
    return view('welcome');
});

Route::get('/contacto/{nombre?}/{edad?}', function ($nombre = 'Ivette', $edad = 33) {
    return view('contacto')->with('nombre', $nombre)->with('edad', $edad);
    
})->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+'
]);


