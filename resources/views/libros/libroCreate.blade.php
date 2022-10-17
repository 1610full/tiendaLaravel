<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear libro</title>
</head>
<body>
    <h1>Crear Libro</h1>
    <a href="/libros">Regresar</a>
    <form action="/libros" method="POST">
        @csrf
        <label for="nombre">Nombre *</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="autor">Autor *</label>
        <input type="text" name="autor" id="autor" required>
        <br>
        <label for="editorial">Editorial *</label>
        <input type="text" name="editorial" id="editorial" required>
        <br>
        <label for="ano_de_publicacion">Año de publicacion *</label>
        <input type="text" name="ano_de_publicacion" id="ano_de_publicacion" required>
        <br>
        <label for="mes_de_publicacion">Mes de publicacion</label>
        <input type="text" name="mes_de_publicacion" id="mes_de_publicacion">
        <br>
        <label for="tipo_de_publicacion">Tipo de publicacion</label>
        <input type="text" name="tipo_de_publicacion" id="tipo_de_publicacion">
        <br>
        <label for="pais">Pais</label>
        <input type="text" name="pais" id="pais">
        <br>
        <label for="paginas">Numero de Paginas *</label>
        <input type="number" min="0" step="1" name="paginas" id="paginas" required>
        <br>
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion">
        <br>
        <label for="precio">Precio *</label>
        <input type="text" name="precio" id="precio" required>
        <br>
        <label for="stock">Stock *</label>
        <input type="number" min="0" step="1" name="stock" id="stock" required>
        <br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
