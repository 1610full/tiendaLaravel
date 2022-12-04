<x-layout-c-r-u-d>
    <x-slot:title>
        Mostrar Proveedor
        </x-slot>

        <h1>Mostrar Proveedor</h1>

        <a class="waves-effect waves-light btn" href="/proveedores">Regresar a proveedores</a>

        <div>
            {{ debug($proveedor) }}
            <h5>Nombre: {{ $proveedor->nombre }}</h5>
            <ul class="collection">
                <li class="collection-item indigo lighten-3">Direccion: {{ $proveedor->direccion }}</li>
                <li class="collection-item indigo lighten-3">Telefono: {{ $proveedor->telefono }}</li>
                <li class="collection-item indigo lighten-3">Email: {{ $proveedor->email }}</li>
                <li class="collection-item indigo lighten-3">Descripcion: {{ $proveedor->descripcion }}</li>
            </ul>
            {{-- Grid de libros --}}
            {{debug($proveedor->productos)}}
            <h5>Libros disponibles:</h5>
            <div class="row">
            @foreach ($proveedor->productos as $libro)
                <div class="col s6 m4">
                    <div class="card blue-grey darken-1">
                        <div class="card-image">
                            @if (!is_null($libro->ruta_imagen))
                                <img src="{{ '/'.$libro->ruta_imagen }}" alt="imagen">
                            @endif
                        </div>
                        <div class="card-content white-text">
                            <span class="card-title">Nombre: {{$libro->nombre}}</span>
                            <span class="card-title">Autor: {{$libro->autor->apellido}}, {{$libro->autor->nombre}}</span>
                            <p>{{$libro->descripcion}}</p>
                        </div>
                        <div class="card-action">
                            <a href="/libros/{{$libro->id}}">Ver</a>
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
