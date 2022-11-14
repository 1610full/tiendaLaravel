<x-layout-c-r-u-d>
    <x-slot:title>
        Editar libro
        </x-slot>

        <h1>Editar Libro</h1>

    <a href="/libros">Regresar</a>

    <div class="row">
    <form class="col s12" action="/libros/{{ $libro->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">

            <div class="input-field col s4">
                @foreach ($errors->get('nombre') as $message)
                    {{ $message }}
                @endforeach
                <input type="text" name="nombre" id="nombre" required value="{{ old('nombre') ?? $libro->nombre }}">
                <label for="nombre">Nombre *</label>
            </div>

            <div class="input-field col s4">
                @foreach ($errors->get('autor') as $message)
                    {{ $message }}
                @endforeach
                <input type="text" name="autor" id="autor" required value="{{ old('autor') ?? $libro->autor }}">
                <label for="autor">Autor *</label>
            </div>

            <div class="input-field col s4">
                @foreach ($errors->get('editorial') as $message)
                    {{ $message }}
                @endforeach
                <input type="text" name="editorial" id="editorial" required value="{{ old('editorial') ?? $libro->editorial }}">
                <label for="editorial">Editorial *</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s4">
                @foreach ($errors->get('ano_de_publicacion') as $message)
                    {{ $message }}
                @endforeach
                <input type="text" name="ano_de_publicacion" id="ano_de_publicacion" required
                    value="{{ old('ano_de_publicacion') ?? $libro->ano_de_publicacion }}">
                <label for="ano_de_publicacion">Año de publicacion *</label>
            </div>

            <div class="input-field col s4">
                @foreach ($errors->get('mes_de_publicacion') as $message)
                    {{ $message }}
                @endforeach
                <input type="text" name="mes_de_publicacion" id="mes_de_publicacion"
                    value="{{ old('mes_de_publicacion') ?? $libro->mes_de_publicacion }}">
                <label for="mes_de_publicacion">Mes de publicacion</label>
            </div>

            <div class="input-field col s4">
                @foreach ($errors->get('tipo_de_publicacion') as $message)
                    {{ $message }}
                @endforeach
                <input type="text" name="tipo_de_publicacion" id="tipo_de_publicacion"
                    value="{{ old('tipo_de_publicacion') ?? $libro->tipo_de_publicacion }}">
                <label for="tipo_de_publicacion">Tipo de publicacion</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                @foreach ($errors->get('pais') as $message)
                    {{ $message }}
                @endforeach
                <input type="text" name="pais" id="pais" value="{{ old('pais') ?? $libro->pais }}">
                <label for="pais">Pais</label>
            </div>

            <div class="input-field col s6">
                @foreach ($errors->get('paginas') as $message)
                    {{ $message }}
                @endforeach
                <input type="number" min="0" step="1" name="paginas" id="paginas" required
                    value="{{ old('paginas') ?? $libro->paginas }}">
                <label for="paginas">Numero de Paginas *</label>
            </div>

        </div>

        <div class="row">
            <div class="input-field col s12">
                @foreach ($errors->get('descripcion') as $message)
                    {{ $message }}
                @endforeach
                <textarea class="materialize-textarea" name="descripcion" id="descripcion">{{ old('descripcion') ?? $libro->descripcion }}</textarea>
                <label for="descripcion">Descripcion</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                @foreach ($errors->get('precio') as $message)
                    {{ $message }}
                @endforeach
                <input type="text" name="precio" id="precio" required value="{{ old('precio') ?? $libro->precio }}">
                <label for="precio">Precio *</label>
            </div>

            <div class="input-field col s6">
                @foreach ($errors->get('stock') as $message)
                    {{ $message }}
                @endforeach
                <input type="number" min="0" step="1" name="stock" id="stock" required
                    value="{{ old('stock') ?? $libro->stock }}">
                <label for="stock">Stock *</label>
            </div>
        </div>

        <input type="submit" value="Guardar">
    </form>
</div>
</x-layout-c-r-u-d>
