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
        </div>
</x-layout-c-r-u-d>
