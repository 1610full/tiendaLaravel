<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar libro</title>
</head>
<body>
    <h1>Mostrar Libro</h1>
    <a href="/libros">Regresar</a>
    <div>
        {{-- {{ dd($producto) }} --}}
        {{debug($producto);}}
        Nombre:{{ $producto->nombre }},
        Autor:{{ $producto->autor }},
        Editorial:{{ $producto->editorial }},
        Año de publicacion:{{ $producto->ano_de_publicacion }},
        Mes de publicacion:{{ $producto->mes_de_publicacion }},
        Tipo de publicacion:{{ $producto->tipo_de_publicacion }},
        Pais:{{ $producto->pais }},
        Numero de Paginas:{{ $producto->paginas }},
        Descripcion:{{ $producto->descripcion }},
        Precio:{{ $producto->precio }},
        Stock:{{ $producto->stock }}
    </div>
</body>
</html>
