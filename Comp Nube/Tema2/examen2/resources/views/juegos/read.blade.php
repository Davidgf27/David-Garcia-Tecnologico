<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos</title>
    <style>
        body.2 {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
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
        h3 {
            text-align: center;
        }
        .container {
            background-color: #ccc;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 18px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }
        h2#id {
            color: #3498db;
        }
        h2#nombre {
            color: #2ecc71;
        }
        h2#status {
            color: #e74c3c;
        }
        .category-details {
            background-color: #333; /* Gris oscuro */
            border: 1px solid #222; /* Borde más oscuro */
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            color: #fff; /* Texto en blanco para mayor contraste */
        }

    </style>
</head>
<body> 
<header>
        <h3>Juegos</h3>
        </header>
        <nav>
            <a href="{{ route('juegos.index') }}">Regresar</a>
        </nav>
</body>
<body.2> 
    <div class="container">
        <h1>Detalle de Juegos</h1>
        <div class="category-details">
            <h2>ID: {!! $juego->id !!}</h2>
            <h2>Categoria: {!! $juego->categorias->nombre !!}</h2>
            <h2>Plataforma: {!! $juego->plataformas->nombre !!}</h2>
            <h2>Nombre: {!! $juego->nombre !!}</h2>
            <h2>Imagen: {!! $juego->imagen !!}</h2>
            <h2>Status:{!! $juego->status !!}</h2>
        </div>
    </div>
</body.2>
</html>
