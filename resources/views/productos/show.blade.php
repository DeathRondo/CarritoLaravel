@extends('layouts.app')
@section('content')

<h1>Detalle del Producto</h1>

<p>Nombre: {{ $producto->nombre }}</p>
<p>Precio: ${{ $producto->precio }}</p>


<a href="{{ route('productos.index') }}">Volver</a>
@endsection