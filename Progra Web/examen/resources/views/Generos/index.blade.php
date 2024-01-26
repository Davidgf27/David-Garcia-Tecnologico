<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
hgfhjkl

<a href="{!! asset('generos/edit') !!}">edit</a>
<a href="{!! asset('generos/read') !!}">Read</a>
<br>
<h1>Listado de generos</h1>
    <a href="{!! asset('generos/create') !!}">Crear</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($generos as $genero)
        <tr>
            <td>{!! $genero->id !!}</td>
            <td>{!! $genero->nombre !!}</td>
            <td>{!! $genero->clave !!}</td>
            <td>{!! $genero->status !!}</td>
            <td>
                <a href="{!! 'generos/'.$genero->id !!}">Detalle</a>
                <a href="{!! 'generos/'.$genero->id.'/edit' !!}">Editar</a>
                {!! Form::open(['method' => 'DELETE' , 'url' => '/generos/'.$genero->id]) !!}
                    {!! Form::submit('Eliminar') !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    <br />
    <a href="{!! asset('bienvenida') !!}">REGRESAR A LOS CRUDS</a>

</body>
</html>
