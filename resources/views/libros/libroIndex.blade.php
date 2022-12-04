<x-layout-c-r-u-d>
    <x-slot:title>
        Libros
        </x-slot>

        <h1>Libros</h1>

        <div class="section">
            <a class="waves-effect waves-light btn" href="/libros/create">Libro nuevo</a>
        </div>

        <div class="section">
            <table class="striped responsive-table">
                <thead class="blue lighten-2">
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
                        <td>
                            <a href="/autores/{{ $producto->autor->id }}">{{ $producto->autor->apellido }}, {{ $producto->autor->nombre }}</a>
                        </td>
                        <td>{{ $producto->paginas }}</td>
                        <td>
                            <a class="waves-effect waves-light btn" href="/libros/{{ $producto->id }}">
                                Detalles
                            </a>
                        </td>
                        <td>
                            <a class="waves-effect waves-light btn" href="/libros/{{ $producto->id }}/edit">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form action="/libros/{{ $producto->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="waves-effect waves-light btn" type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
</x-layout-c-r-u-d>
