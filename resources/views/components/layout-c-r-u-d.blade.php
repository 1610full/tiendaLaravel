<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'libros' }}</title>

    @vite(['resources/css/materialize.css'])
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo right">Logo</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/libros">Libros</a></li>
                <li><a href="/autores">Autores</a></li>
                <li><a href="/proveedores">Proveedores</a></li>
                <li>
                    @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <input type="submit" value="{{auth()->user()->name}} Logout" class="waves-effect waves-teal btn-flat" style="color: white">
                    </form>
                    @else
                    <a href="/login" class="waves-effect waves-teal btn-flat" style="color: white">Login</a>
                    <a href="/register" class="waves-effect waves-teal btn-flat" style="color: white">Register</a>
                    @endauth
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        {{ $slot }}
    </div>
    @vite(['resources/js/materialize.js'])
</body>
</html>
