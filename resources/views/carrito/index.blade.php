<!-- resources/views/carrito/index.blade.php -->
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <!-- Puedes agregar Bootstrap aquí -->
</head>
<body>
    <h1>Carrito de Compras</h1>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    @if(count($carrito) > 0)
        <ul>
            @foreach($carrito as $id => $producto)
                <li>
                    {{ $producto['nombre'] }} - ${{ $producto['precio'] }} x {{ $producto['cantidad'] }}
                </li>
            @endforeach
        </ul>
        <a href="#">Proceder a pagar</a> <!-- Este es un paso final -->
    @else
        <p>No hay productos en el carrito.</p>
    @endif
</body>
</html>
@endsection