<x-layout-c-r-u-d>
    <x-slot:title>
        Crear Autor
        </x-slot>

        <h1>Crear Autor</h1>

        <div class="section">
            <a class="waves-effect waves-light btn" href="/autores">Regresar</a>
        </div>

        <div class="row">
            <form class="col s12" action="/autores" method="POST">
                @csrf

                <div class="row">

                    <div class="input-field col s6">
                        @foreach ($errors->get('nombre') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="text" name="nombre" id="nombre" required value="{{ old('nombre') }}">
                        <label for="nombre">Nombre *</label>
                    </div>

                    <div class="input-field col s6">
                        @foreach ($errors->get('apellido') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="text" name="apellido" id="apellido" required value="{{ old('apellido') }}">
                        <label for="apellido">Apellido *</label>
                    </div>

                </div>

                <input class="waves-effect waves-light btn" type="submit" value="Guardar">
            </form>
        </div>
</x-layout-c-r-u-d>
