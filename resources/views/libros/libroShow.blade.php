<x-layout-c-r-u-d>
    <x-slot:title>
        Mostrar libro
        </x-slot>

        <h1>Mostrar Libro</h1>

        <a class="waves-effect waves-light btn" href="/libros">Regresar a libros</a>

        <div>
            {{-- {{ dd($producto) }} --}}
            {{ debug($producto) }}
            <ul class="collection">
                <li class="collection-item indigo lighten-3">Nombre: {{ $producto->nombre }}</li>
                <li class="collection-item indigo lighten-3">Autor: <a href="/autores/{{ $producto->autor->id }}">{{ $producto->autor->apellido }}, {{ $producto->autor->nombre }}</a></li>
                <li class="collection-item indigo lighten-3">Editorial: {{ $producto->editorial }}</li>
                <li class="collection-item indigo lighten-3">Año de publicacion: {{ $producto->ano_de_publicacion }}</li>
                <li class="collection-item indigo lighten-3">Mes de publicacion: {{ $producto->mes_de_publicacion }}</li>
                <li class="collection-item indigo lighten-3">Tipo de publicacion: {{ $producto->tipo_de_publicacion }}
                </li>
                <li class="collection-item indigo lighten-3">Pais: {{ $producto->pais }}</li>
                <li class="collection-item indigo lighten-3">Numero de Paginas: {{ $producto->paginas }}</li>
                <li class="collection-item indigo lighten-3">Descripcion: {{ $producto->descripcion }}</li>
                <li class="collection-item indigo lighten-3">Precio: {{ $producto->precio }}</li>
                <li class="collection-item indigo lighten-3">Stock: {{ $producto->stock }}</li>
            </ul>
            {{-- Grid de proveedores --}}
            {{debug($proveedores)}}
            <h5>Proveedores que venden este libro:</h5>
            <div class="row">
            @foreach ($proveedores as $proveedor)
                <div class="col s6 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Nombre: {{$proveedor->nombre}}</span>
                            <span class="card-title">Email: {{$proveedor->email}}</span>
                            <p>{{$proveedor->telefono}}</p>
                            <p>{{$proveedor->direccion}}</p>
                        </div>
                        <div class="card-action">
                            <a href="/proveedores/{{$proveedor->id}}">Ver</a>
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 3 == 0)
                </div>
                <div class="row">
                @endif
            @endforeach
            </div>
        </div>
</x-layout-c-r-u-d>
