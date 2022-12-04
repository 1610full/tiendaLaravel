<x-layout-c-r-u-d>
    <x-slot:title>
        Autores
        </x-slot>

        <h1>Autores</h1>

        <div class="section">
            <a class="waves-effect waves-light btn" href="/autores/create">Autor nuevo</a>
        </div>

        <div class="section">
            <table class="striped responsive-table">
                <thead class="blue lighten-2">
                    <th>ID</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Ver libros</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </thead>
                @foreach ($autores as $autor)
                    <tr>
                        <td>{{ $autor->id }}</td>
                        <td>{{ $autor->apellido }}</td>
                        <td>{{ $autor->nombre }}</td>
                        <td>
                            <a class="waves-effect waves-light btn" href="/autores/{{ $autor->id }}">
                                Detalles
                            </a>
                        </td>
                        <td>
                            <a class="waves-effect waves-light btn" href="/autores/{{ $autor->id }}/edit">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form action="/autores/{{ $autor->id }}" method="post">
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
