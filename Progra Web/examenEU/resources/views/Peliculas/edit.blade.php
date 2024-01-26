<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {!! Form::open(['method' => 'PATCH' , 'url'=>'/peliculas/'.$pelicula->id])  !!}
        {!! Form::label ('titulo','titulo ') !!}
        {!! Form::text ('titulo',null,['placeholder'=>'Ingresa titulo']) !!}
        <br />
        <br />

        {!! Form::label ('foto','Foto ') !!}
        {!! Form::text ('foto',null,['placeholder'=>'Ingresa foto']) !!}
        <br />
        <br />

        {!! Form::label ('id_genero','Genero:') !!}
        {!! Form::select ('id_genero', $generos->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br>

        {!! Form::label ('id_clasific','Clasificacion:') !!}
        {!! Form::select ('id_clasific', $clasificaciones->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br>


        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status',
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar') !!}
        {!! Form::close() !!}
</body>
</html>
