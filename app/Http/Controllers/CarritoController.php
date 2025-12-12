<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    // Mostrar el carrito
    public function index()
    {
        // Recuperamos los productos en el carrito (almacenados en la sesión)
        $carrito = session()->get('carrito', []);
        return view('carrito.index', compact('carrito'));
    }

    // Agregar un producto al carrito
    public function agregar($id)
    {
        // Buscar el producto
        $producto = Producto::find($id);

        // Si el carrito no existe en la sesión, inicialízalo
        $carrito = session()->get('carrito', []);

        // Si el producto ya existe en el carrito, actualízalo
        if(isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
        } else {
            $carrito[$id] = [
                'nombre' => $producto->nombre,
                'precio' => $producto->precio,
                'cantidad' => 1
            ];
        }

        // Guardar el carrito actualizado en la sesión
        session()->put('carrito', $carrito);

        return redirect()->route('carrito.index')->with('success', 'Producto agregado al carrito!');
    }
}
