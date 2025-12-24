<!DOCTYPE html>
<html>
<head>
    <title>Admin - @yield('title')</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <aside>Admin Menu</aside>

    <main>
        @yield('content')
    </main>
</body>
</html>