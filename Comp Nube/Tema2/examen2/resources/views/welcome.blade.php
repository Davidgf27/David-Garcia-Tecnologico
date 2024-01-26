<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDS</title>
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
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
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
            max-width: 80%; /* Ajusta el tamaño de la imagen según tu preferencia */
            height: 250px;
            width: 450px;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <header>
    <h2>José Luis Díaz Cortez</h2>
        <h1>Juegos</h1>
    </header>
    <nav>
        <a href="{{ route('categorias.index') }}">Categorías</a>
        <a href="{{ route('plataformas.index') }}">Plataformas</a>
        <a href="{{ route('juegos.index') }}">Juegos</a>
        
    </nav>
    <div class="container">
        <img src="https://media.istockphoto.com/id/1277731016/es/foto/concepto-de-computaci%C3%B3n-en-la-nube-red-de-comunicaci%C3%B3n.jpg?s=612x612&w=0&k=20&c=Bi8wN34dXwKfw-3WIk_PD4sbKgHx2zKVMM0IXg_GJHo=">
        <h2>Computo en la nube Tema 2</h2>
        @yield('content')
    </div>
</body>
</html>