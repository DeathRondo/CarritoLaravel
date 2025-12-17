<!-- resources/views/productos/index.blade.php -->
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <!-- Agregar Bootstrap aquí -->
</head>
    <body>

        <h1>Lista de Productos</h1>
        <div class="bg-red-500 text-white p-4">
  Hola Tailwind
</div>

        <a href="{{ route('productos.create') }}">Nuevo Producto</a>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-4">
            @foreach($productos as $producto)
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300">
                        <div class="p-5">
                            <!-- Título -->
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                {{ $producto->nombre }}
                            </h5>
                            <p class="text-xl font-semibold text-indigo-600 mb-3">
                                ${{ number_format($producto->precio, 0, ',', '.') }}
                            </p>
                            <!-- Descripción corta -->
                            <p class="mb-4 font-normal text-gray-600">
                                Descripción breve del producto para atraer al cliente.
                            </p>

                            <div class="flex gap-2">
                                <a href="{{ route('productos.edit', $producto->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                    Editar
                                </a>
                                    <a href="{{ route('productos.show', $producto->id) }}">Ver</a>
                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" onsubmit="return confirm('¿Eliminar?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700">
                                            Eliminar
                                        </button>
                                    </form>
                            </div>
                            <!-- {{ $producto->nombre }} - ${{ $producto->precio }} -->
                            <!-- <a href="{{ route('productos.show', $producto->id) }}">Ver</a>
                            <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>
                            <a href="{{ route('carrito.agregar', $producto->id) }}">Agregar al carrito</a> -->

                            <!-- <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form> -->
                    </div>
                        
                
                </div>
            @endforeach
        </div>
    <a href="{{ route('carrito.index') }}" class="btn btn-primary">Ver carrito</a>

        

    </body>
</html>
@endsection