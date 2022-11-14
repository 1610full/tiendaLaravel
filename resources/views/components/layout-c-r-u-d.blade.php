<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'libros' }}</title>

    @vite(['resources/css/materialize.css'])
</head>
<body>
    <div class="container">
        {{ $slot }}
    </div>
    @vite(['resources/js/materialize.js'])
</body>
</html>
