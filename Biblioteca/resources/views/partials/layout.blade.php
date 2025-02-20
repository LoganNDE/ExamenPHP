<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>@yield('titulo')</title>
</head>
<body>
    <nav class="container d-flex justify-content-between align-items-center pt-5 pb-5">
        <div> 
            <h1>Bilioteca</h1>
            @if (auth()->check())
                <p>Bienvenido {{ auth()->user()->user }}</p>
            @endif
        </div>

        <div class="nav">
        <ul class="navbar-nav d-flex flex-row gap-5">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('biblioteca.index') }}">Inicio</a>
            </li>
            @if (auth()->check())
            <li class="nav-item">
                <a class="nav-link" href=" {{route('socios.index')}} ">Listado socios</a>
            </li>
            @endif
            </ul>
        </div>

        
        <div>
            @if (auth()->check())
                <a class="btn btn-primary" href="{{ route('biblioteca.create') }}">Agregar nuevo libro</a>
                <a class="btn btn-danger" href="{{ route('login.logout') }}">Cerrar sesión</a>
            @else
            <a class="btn btn-primary" href="{{ route('login') }}">Iniciar sesión</a>
            @endif
        </div>
    </nav>
    @yield('contenido')
    <footer class="container d-flex justify-content-between align-items-center pt-5 pb-5">
        <p>Desarrollado por Logan Naranjo Rodriguez</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>