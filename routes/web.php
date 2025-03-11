<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade as PDF;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/productos', function () {
//    return 'hola mundo';
//});

Route::get('/productos',[App\Http\Controllers\productosController::class,"index"]);

Route::get('/productos/mostrar',[App\Http\Controllers\productosController::class,"mostrar"]);

Route::get('/productos/crear',[App\Http\Controllers\productosController::class,"crear"]);
Route::post('/productos/crear/dataFormulario',[App\Http\Controllers\productosController::class,'dataFormulario'])->name('productos.formdata');

Route::get('/app', function (){
    return view('app',['Nombre'=>'Claudia']);
}); 

Route::get('/home', function (){
    return view('home');
}); 

Route::get('/about', function (){
    return view('about');
});

Route::get('/pdf', [App\Http\Controllers\productosController::class, 'getPDF'])->name('productos.pdf');