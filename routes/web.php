<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;

use App\Models\Producto;

Route::get('/', [ProductoController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';


// Ruta principal (home)
// Route::get('/', function () {
//     return view('index');
// })->name('index');

// Rutas CRUD de productos (controlador)
Route::resource('productos', ProductoController::class);
Route::resource('carrito', CarritoController::class);

// Ruta de contacto
Route::post('/contacto/enviar', function () {
    return "Formulario enviado correctamente ✅";
})->name('contacto.enviar')->middleware(['auth', 'verified']);;

//ir a la interfaz de compra
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');



//Ruta de carrito

// Ruta para agregar productos al carrito
Route::get('/carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');

// Ruta para ver el carrito
// Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');