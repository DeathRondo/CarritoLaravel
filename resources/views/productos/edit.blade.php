@extends('layouts.app')
@section('content')

<h1>Editar Producto</h1>

<form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nombre" value="{{ $producto->nombre }}">
    <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}">

    <button type="submit">Actualizar</button>
    <a href="{{ route('productos.index') }}">Volver</a>
</form>
@endsection