<x-layout-c-r-u-d>
    <x-slot:title>
        Proveedores
        </x-slot>

        <h1>Proveedores</h1>

        <div class="section">
            <a class="waves-effect waves-light btn" href="/proveedores/create">Proveedor nuevo</a>
        </div>

        <div class="section">
            <table class="striped responsive-table">
                <thead class="blue lighten-2">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Ver mas</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </thead>
                @foreach ($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->id }}</td>
                        <td>{{ $proveedor->nombre }}</td>
                        <td>{{ $proveedor->direccion }}</td>
                        <td>{{ $proveedor->telefono }}</td>
                        <td>
                            <a class="waves-effect waves-light btn" href="/proveedores/{{ $proveedor->id }}">
                                Detalles
                            </a>
                        </td>
                        <td>
                            <a class="waves-effect waves-light btn" href="/proveedores/{{ $proveedor->id }}/edit">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form action="/proveedores/{{ $proveedor->id }}" method="post">
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
