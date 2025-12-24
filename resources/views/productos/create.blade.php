@extends('layouts.app')
@section('content')

<h1>Crear Producto</h1>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="number" step="0.01" name="precio" placeholder="Precio" required>
    <button type="submit">Guardar</button>
</form>

@endsection