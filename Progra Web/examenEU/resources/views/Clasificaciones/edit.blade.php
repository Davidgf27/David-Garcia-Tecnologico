<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar clasificaciones</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/clasificaciones/'.$clasificacion->id]) !!}
        {!! Form::label ('nombre','Nombre del clasificicacion') !!}
        {!! Form::text ('nombre',$clasificacion->nombre,['placeholder'=>'Ingresa nombre del clasificicacion']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status',
        array('1'=>'Activo','0'=>'Baja') , $clasificacion->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Editar') !!}
        {!! Form::close() !!}
</body>
</html>
