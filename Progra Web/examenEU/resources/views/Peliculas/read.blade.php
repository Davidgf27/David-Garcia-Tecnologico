<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
    <h1>Detalle de pais</h1>

    <h2>Nombre: {!! $pelicula->titulo !!}</h2>

    <img src="{{ $pelicula->foto }}" alt="Imagen de la película">

    <h2>Generos: {!! $pelicula->generos ->nombre !!}</h2>

    <h2>Clasificaciones: {!! $pelicula->clasificaciones ->nombre !!}</h2>

    <h2>Status: {!! $pelicula->status !!}</h2>

    <br />

    <a href="{!! asset('peliculas') !!}">REGRESAR</a>
</body>
</html>

