<x-layout-c-r-u-d>
    <x-slot:title>
        Libros
        </x-slot>

        <h1>Libros</h1>

            <a class="btn btn-outline-primary" href="/libros/create">Libro nuevo</a>

            <table class="table table-striped table-hover align-middle">
                <thead class="blue lighten-2">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th>Paginas</th>
                    <th>Ver mas</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </thead>
                <tbody class="table-group-divider">
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>
                            <a href="/autores/{{ $producto->autor->id }}">{{ $producto->autor->fullName }}</a>
                        </td>
                        <td>{{ $producto->paginas }}</td>
                        <td>
                            <a class="btn btn-outline-info" href="/libros/{{ $producto->id }}">
                                Detalles
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-outline-primary" href="/libros/{{ $producto->id }}/edit">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form action="/libros/{{ $producto->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-outline-danger" type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
</x-layout-c-r-u-d>
