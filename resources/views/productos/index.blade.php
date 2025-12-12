<!-- resources/views/productos/index.blade.php -->

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

        <a href="{{ route('productos.create') }}">Nuevo Producto</a>

        <ul>
        @foreach($productos as $producto)
            <li>
                {{ $producto->nombre }} - ${{ $producto->precio }}
                <a href="{{ route('productos.show', $producto->id) }}">Ver</a>
                <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>
                <a href="{{ route('carrito.agregar', $producto->id) }}">Agregar al carrito</a>

                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                
                    
                
            </li>
        @endforeach
        </ul>
    <a href="{{ route('carrito.index') }}" class="btn btn-primary">Ver carrito</a>

        

    </body>
</html>