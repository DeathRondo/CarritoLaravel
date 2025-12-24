@extends('layouts.app')
@section('content')<!-- resources/views/productos/index.blade.php -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <!-- Agregar Bootstrap aquí -->
</head>
<body>
    <h1>Lista de Productos</h1>

    @foreach($productos as $producto)
        <div>
            <strong>{{ $producto->nombre }}</strong> - ${{ $producto->precio }}
            <a href="{{ route('carrito.agregar', $producto->id) }}">Agregar al carrito</a>
        </div>
    @endforeach
</body>
</html>
@endsection