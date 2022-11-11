<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index libros</title>

    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
</head>
<body>
    <h1>Libros</h1>
    <a href="/libros/create">Libro nuevo</a>
    {{-- <ul>
        @foreach ($productos as $producto)
        <li>
            {{ $producto->nombre }}
        </li>
        @endforeach
    </ul> --}}
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Autor</th>
            <th>Paginas</th>
            <th>Ver mas</th>
            <th>Editar</th>
            <th>Borrar</th>
        </thead>
        @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->autor }}</td>
            <td>{{ $producto->paginas }}</td>
            <td>
                <a href="/libros/{{ $producto->id }}">
                    Detalles
                </a>
            </td>
            <td>
                <a href="/libros/{{ $producto->id }}/edit">
                    Editar
                </a>
            </td>
            <td>
                <form action="/libros/{{ $producto->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
