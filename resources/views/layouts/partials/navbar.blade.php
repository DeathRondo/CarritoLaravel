<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16 items-center">

            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <span class="text-xl font-bold text-indigo-600">
                    🛒 MiTienda
                </span>

                <a href="{{ route('productos.index') }}"
                   class="text-gray-600 hover:text-indigo-600">
                    Productos
                </a>
            </div>

            <!-- Menú derecho -->
            <div class="flex items-center space-x-4">

                <!-- Carrito -->
                <a href="{{ route('carrito.index') }}"
                   class="relative text-gray-600 hover:text-indigo-600">
                    🛒
                    @php
                        $cantidad = count(session('carrito', []));
                    @endphp
                    @if($cantidad > 0)
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs px-2 rounded-full">
                            {{ $cantidad }}
                        </span>
                    @endif
                </a>

                @auth
                    <!-- Usuario logueado -->
                    <span class="text-gray-700">
                        {{ auth()->user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-red-500 hover:underline">
                            Logout
                        </button>
                    </form>
                @else
                    <!-- Invitado -->
                    <a href="{{ route('login') }}"
                       class="text-gray-600 hover:text-indigo-600">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="bg-indigo-600 text-white px-3 py-1 rounded hover:bg-indigo-700">
                        Registrarse
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
