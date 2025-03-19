<?php

use App\Http\Controllers\PropiedadShow;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');
Route::get('/vistas', function () {
    return view('vistas.busqueda'); // Retorna la vista 'vistas.busqueda'
})->name('busqueda'); 
Route::get('/propiedadesComprar', function () {
    return view('vistas.comprar'); // Retorna la vista 'vistas.busqueda'
})->name('propiedadesComprar'); 
Route::get('/propiedadesAlquilar', function () {
    return view('vistas.alquilar'); // Retorna la vista 'vistas.busqueda'
})->name('propiedadesAlquilar'); 
Route::get('/propiedades/{id}', [PropiedadShow::class, 'show'])->name('propiedadShow');

