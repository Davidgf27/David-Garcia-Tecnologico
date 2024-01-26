<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Juego</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #111;
            color: #fff;
            padding: 10px;
        }
        nav {
            background-color: #555;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px; /* Tamaño de fuente elegante */
            transition: color 0.3s; /* Transición suave para el cambio de color */
        }
        nav a:hover {
            text-decoration: underline;
            color: #f1c40f; /* Cambia el color al pasar el mouse por encima */
        }
        h2 {
            text-align: center;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background-color: #f7f7f7;
            border: 1px solid #ccc;
            border-radius: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        select {
            background-color: #fff;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h2>Juegos</h2>
    </header>
    <nav>
        <a href="{{ route('juegos.index') }}">Regresar</a>
    </nav>
    <h1>Crear Juego</h1>
    {!! Form::open(['url' => '/juegos', 'enctype'=>'multipart/form-data']) !!}
        {!! Form::label('id_categoria', 'Categoría') !!}
        {!! Form::select('id_categoria', $categorias->pluck('nombre','id')->all(), null, [ 'placeholder' => 'Seleccionar categoría']) !!}

        {!! Form::label('id_plataforma', 'Plataforma') !!}
        {!! Form::select('id_plataforma', $plataformas->pluck('nombre','id')->all(), null, ['placeholder' => 'Seleccionar plataforma']) !!}
 
        {!! Form::label('nombre', 'Nombre del juego') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del juego']) !!}

        {!! Form::hidden ('imagen','fotografias') !!}

        {!! Form::label ('imagen','Seleccionar foto:') !!}
        {!! Form::file ('imagen',null,['accept'=>'.jpg,.jpeg,.bmp,.png,.doc,.docx']) !!}
        <br />
        <br />

        {!! Form::label('status', 'Estatus') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], null, ['class' => 'form-control']) !!}

        {!! Form::submit('Guardar Juego', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</body>
</html>
