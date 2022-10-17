<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar libro</title>
</head>
<body>
    <h1>Editar Libro</h1>
    <a href="/libros">Regresar</a>
    <form action="/libros/{{ $libro->id }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre *</label>
        <input type="text" name="nombre" id="nombre" required value="{{ $libro->nombre }}">
        <br>
        <label for="autor">Autor *</label>
        <input type="text" name="autor" id="autor" required  value="{{ $libro->autor }}">
        <br>
        <label for="editorial">Editorial *</label>
        <input type="text" name="editorial" id="editorial" required  value="{{ $libro->editorial }}">
        <br>
        <label for="ano_de_publicacion">Año de publicacion *</label>
        <input type="text" name="ano_de_publicacion" id="ano_de_publicacion" required  value="{{ $libro->ano_de_publicacion }}">
        <br>
        <label for="mes_de_publicacion">Mes de publicacion</label>
        <input type="text" name="mes_de_publicacion" id="mes_de_publicacion"  value="{{ $libro->mes_de_publicacion }}">
        <br>
        <label for="tipo_de_publicacion">Tipo de publicacion</label>
        <input type="text" name="tipo_de_publicacion" id="tipo_de_publicacion"  value="{{ $libro->tipo_de_publicacion }}">
        <br>
        <label for="pais">Pais</label>
        <input type="text" name="pais" id="pais"  value="{{ $libro->pais }}">
        <br>
        <label for="paginas">Numero de Paginas *</label>
        <input type="number" min="0" step="1" name="paginas" id="paginas" required  value="{{ $libro->paginas }}">
        <br>
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion"  value="{{ $libro->descripcion }}">
        <br>
        <label for="precio">Precio *</label>
        <input type="text" name="precio" id="precio" required  value="{{ $libro->precio }}">
        <br>
        <label for="stock">Stock *</label>
        <input type="number" min="0" step="1" name="stock" id="stock" required  value="{{ $libro->stock }}">
        <br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
