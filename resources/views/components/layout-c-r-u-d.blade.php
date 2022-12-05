<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'libros' }}</title>

    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrap.bundle.js'])
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Libreria</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/libros">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/autores">Autores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/proveedores">Proveedores</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <input class="btn btn-outline-secondary" type="submit" value="{{ auth()->user()->name }} Logout">
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-light btn btn-primary mx-md-1" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light btn btn-primary mx-md-1" href="/register">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        {{ $slot }}
    </div>
    {{-- @vite(['resources/js/bootstrap.js']) --}}
</body>

</html>
