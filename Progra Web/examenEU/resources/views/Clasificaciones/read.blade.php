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

    <h2>Nombre: {!! $clasificacion->nombre !!}</h2>

    <h2>Status: {!! $clasificacion->status !!}</h2>

    <br />

    <a href="{!! asset('clasificaciones') !!}">REGRESAR</a>
</body>
</html>
