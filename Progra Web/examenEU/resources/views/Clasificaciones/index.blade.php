<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/styles/css/estilo.css') }}">
    <title>Document</title>
</head>
<body>
<br>
<h1>Listado de clasificaciones</h1>
    <a href="{!! asset('clasificaciones/create') !!}">Crear</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($clasificaciones as $clasificacion)
        <tr>
            <td>{!! $clasificacion->id !!}</td>
            <td>{!! $clasificacion->nombre !!}</td>
            <td>{!! $clasificacion->status !!}</td>
            <td>
                <a href="{!! 'clasificaciones/'.$clasificacion->id !!}">Detalle</a>
                <a href="{!! 'clasificaciones/'.$clasificacion->id.'/edit' !!}">Editar</a>
                {!! Form::open(['method' => 'DELETE' , 'url' => '/clasificaciones/'.$clasificacion->id]) !!}
                    {!! Form::submit('Eliminar') !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    <br />
    <a href="{!! asset('bienvenida') !!}">REGRESAR</a>

</body>
</html>
