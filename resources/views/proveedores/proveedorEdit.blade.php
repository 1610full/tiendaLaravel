<x-layout-c-r-u-d>
    <x-slot:title>
        Editar Proveedor
        </x-slot>

        <h1>Editar Proveedor</h1>

        <div class="section">
            <a class="waves-effect waves-light btn" href="/proveedores">Regresar</a>
        </div>

        <div class="row">
            <form class="col s12" action="/proveedores/{{ $proveedor->id }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="row">

                    <div class="input-field col s6">
                        @foreach ($errors->get('nombre') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="text" name="nombre" id="nombre" required value="{{ old('nombre') ?? $proveedor->nombre }}">
                        <label for="nombre">Nombre *</label>
                    </div>

                    <div class="input-field col s6">
                        @foreach ($errors->get('direccion') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="text" name="direccion" id="direccion" required value="{{ old('direccion') ?? $proveedor->direccion }}">
                        <label for="direccion">Direccion *</label>
                    </div>

                </div>

                <div class="row">

                    <div class="input-field col s6">
                        @foreach ($errors->get('telefono') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="tel" name="telefono" id="telefono" required value="{{ old('telefono') ?? $proveedor->telefono }}">
                        <label for="telefono">Telefono *</label>
                    </div>

                    <div class="input-field col s6">
                        @foreach ($errors->get('email') as $message)
                            {{ $message }}
                        @endforeach
                        <input type="email" name="email" id="email" required value="{{ old('email') ?? $proveedor->email }}">
                        <label for="email">Email *</label>
                    </div>

                </div>

                <div class="row">
                    <div class="input-field col s12">
                        @foreach ($errors->get('descripcion') as $message)
                            {{ $message }}
                        @endforeach
                        <textarea class="materialize-textarea" name="descripcion" id="descripcion">{{ old('descripcion') ?? $proveedor->descripcion }}</textarea>
                        <label for="descripcion">Descripcion</label>
                    </div>
                </div>

                <input class="waves-effect waves-light btn" type="submit" value="Guardar">
            </form>
        </div>
</x-layout-c-r-u-d>
