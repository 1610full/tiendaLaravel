<x-layout-c-r-u-d>
    <x-slot:title>
        Mostrar Autor
        </x-slot>

        <h1>Mostrar Autor</h1>

        <a class="waves-effect waves-light btn" href="/autores">Regresar a autores</a>

        <div>
            {{ debug($autor) }}
            <h2>{{ $autor->apellido }}, {{ $autor->nombre }}</h2>
            <div class="collection">
                @foreach ($autor->libros as $libro)
                    <a class="collection-item" href="/libros/{{ $libro->id }}">Libro: {{ $libro->nombre }}, Tipo: {{ $libro->tipo_de_publicacion }}</a>
                @endforeach
            </div>
        </div>
</x-layout-c-r-u-d>
