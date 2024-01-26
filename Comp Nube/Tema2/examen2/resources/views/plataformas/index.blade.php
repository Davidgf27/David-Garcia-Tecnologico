<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataformas</title>
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
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        img {
        max-width: 80%; 
        height: 250px;
        width: 450px;
        display: block;
        margin: 0 auto;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
            padding: 10px;
            font-weight: bold;
            border-bottom: 2px solid #ddd;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table-container {
            width: 80%;
            margin: 0 auto;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db; /* Color de fondo */
            color: #fff; /* Color del texto */
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #2980b9; /* Cambia el color de fondo al pasar el mouse */
        }
        .custom-button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
        .custom-button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <header>
        <h1>Plataformas</h1>
    </header>
    <nav>
        <a href="{{ route('plataformas.create') }}">Crear Plataforma</a>
        <a href="{{ asset('/') }}">Regresar a principal</a>
    </nav>
    <h1>Listado de Plataformas</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($plataformas as $plataforma)
        <tr>
            <td>{!! $plataforma->id !!}</td>
            <td>{!! $plataforma->nombre !!}</td>
            <td>{!! $plataforma->status !!}</td>
            <td>
                <button class="button"><a href="{!! 'plataformas/'.$plataforma->id !!}">Detalle</a></button>               
                <button class="button"><a href="{!! 'plataformas/'.$plataforma->id.'/edit' !!}">Editar</a></button>
                {!! Form::open(['method' => 'DELETE', 'url' => '/plataformas/'.$plataforma->id]) !!}
                {!! Form::submit('Eliminar', ['class' => 'custom-button']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    <br />
</body>
</html>