<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;

use App\Models\Producto;

// Ruta principal (home)
Route::get('/', function () {
    return view('index');
})->name('index');

// Rutas CRUD de productos (controlador)
Route::resource('productos', ProductoController::class);
Route::resource('carrito', CarritoController::class);

// Ruta de contacto
Route::post('/contacto/enviar', function () {
    return "Formulario enviado correctamente ✅";
})->name('contacto.enviar');

//ir a la interfaz de compra
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');



//Ruta de carrito

// Ruta para agregar productos al carrito
Route::get('/carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');

// Ruta para ver el carrito
// Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');

