<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mi tienda')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

    @include('layouts.partials.navbar')

    <main class="max-w-7xl mx-auto px-4 py-6">
        @yield('content')
    </main>

</body>
</html>
