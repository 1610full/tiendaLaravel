<x-layout-c-r-u-d>
    <x-slot:title>
        Crear Libro
        </x-slot>

        <h1>Crear Libro</h1>

        <div class="section">
            <a class="waves-effect waves-light btn" href="/libros">Regresar</a>
        </div>

        <div class="row">
            <form class="col s12" action="/libros" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="input-field col s4">
                        @foreach ($errors->get('nombre') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="text" name="nombre" id="nombre" required value="{{ old('nombre') }}">
                        <label for="nombre">Nombre *</label>
                    </div>

                    <div class="input-field col s4">
                        @foreach ($errors->get('autor_id') as $message)
                            {{ $message }}
                        @endforeach
                        {{-- <input type="text" name="autor" id="autor" required value="{{ old('autor') }}">
                        <label for="autor">Autor *</label> --}}

                            <select name="autor_id" id="autor_id" class="browser-default" required>
                              <option value="" disabled selected>Elige un autor</option>
                              @foreach ($autores as $autor)
                                <option value="{{ $autor->id }}">{{ $autor->apellido }}, {{ $autor->nombre }}</option>
                              @endforeach
                            </select>
                            {{-- <label for="autor">Autor *</label> --}}

                    </div>

                    <div class="input-field col s4">
                        @foreach ($errors->get('editorial') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="text" name="editorial" id="editorial" required value="{{ old('editorial') }}">
                        <label for="editorial">Editorial *</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s4">
                        @foreach ($errors->get('ano_de_publicacion') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="text" name="ano_de_publicacion" id="ano_de_publicacion" required
                            value="{{ old('ano_de_publicacion') }}">
                        <label for="ano_de_publicacion">Año de publicacion *</label>
                    </div>

                    <div class="input-field col s4">
                        @foreach ($errors->get('mes_de_publicacion') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="text" name="mes_de_publicacion" id="mes_de_publicacion"
                            value="{{ old('mes_de_publicacion') }}">
                        <label for="mes_de_publicacion">Mes de publicacion</label>
                    </div>

                    <div class="input-field col s4">
                        @foreach ($errors->get('tipo_de_publicacion') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="text" name="tipo_de_publicacion" id="tipo_de_publicacion"
                            value="{{ old('tipo_de_publicacion') }}">
                        <label for="tipo_de_publicacion">Tipo de publicacion</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        @foreach ($errors->get('pais') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="text" name="pais" id="pais" value="{{ old('pais') }}">
                        <label for="pais">Pais</label>
                    </div>

                    <div class="input-field col s6">
                        @foreach ($errors->get('paginas') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="number" min="0" step="1" name="paginas" id="paginas" required
                            value="{{ old('paginas') }}">
                        <label for="paginas">Numero de Paginas *</label>
                    </div>

                </div>

                <div class="row">
                    <div class="input-field col s12">
                        @foreach ($errors->get('descripcion') as $message)
                            {{ $message }}
                        @endforeach
                        <textarea class="materialize-textarea" name="descripcion" id="descripcion">{{ old('descripcion') }}</textarea>
                        <label for="descripcion">Descripcion</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        @foreach ($errors->get('precio') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="text" name="precio" id="precio" required value="{{ old('precio') }}">
                        <label for="precio">Precio *</label>
                    </div>

                    <div class="input-field col s6">
                        @foreach ($errors->get('stock') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="number" min="0" step="1" name="stock" id="stock" required
                            value="{{ old('stock') }}">
                        <label for="stock">Stock *</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        @foreach ($errors->get('proveedor') as $message)
                            {{ $message }}
                        @endforeach
                        <span>Proveedor(es) *</span>
                        @foreach ($proveedores as $proveedor)
                            <p>
                                <label for="proveedor{{ $proveedor->id }}">
                                    <input type="checkbox" class="filled-in" name="proveedor[]" id="proveedor{{ $proveedor->id }}" value="{{ $proveedor->id }}">
                                    <span>{{ $proveedor->nombre }}</span>
                                </label>
                            </p>
                        @endforeach
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s4">
                        <section>Imagen:</section>
                        <input type="file" id="imagen" name="imagen" accept="image/png, image/jpeg">
                    </div>
                </div>

                <input class="waves-effect waves-light btn" type="submit" value="Guardar">
            </form>
        </div>
</x-layout-c-r-u-d>
