<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar genero</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/generos/'.$genero->id]) !!}
        {!! Form::label ('nombre','Nombre del genero') !!}
        {!! Form::text ('nombre',$genero->nombre,['placeholder'=>'Ingresa nombre del genero']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status',
        array('1'=>'Activo','0'=>'Baja') , $genero->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Editar Genero') !!}
        {!! Form::close() !!}
</body>
</html>
