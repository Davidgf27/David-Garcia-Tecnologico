<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<br>
<h1>Listado de peliculas</h1>
    <a href="{!! asset('peliculas/create') !!}">Crear</a>

        <div class="row">
            @foreach($peliculas as $pelicula)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <br>
                    <img src="{{ $pelicula->foto }}" class="card-img-top" alt="Imagen de la película" width="150" height="200">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pelicula->titulo }}</h5>
                        <p class="card-text">
                            <strong>Id:</strong> {{ $pelicula->id }}<br>
                            <strong>Género:</strong> {{ $pelicula->generos->nombre }}<br>
                            <strong>Clasificación:</strong> {{ $pelicula->clasificaciones->nombre }}<br>
                            <strong>Estado:</strong> {{ $pelicula->status }}<br>
                        </p>
                        <a href="{{ 'peliculas/'.$pelicula->id }}" class="btn btn-primary">Detalle</a>
                        <a href="{{ 'peliculas/'.$pelicula->id.'/edit' }}" class="btn btn-secondary">Editar</a>
                        {!! Form::open(['method' => 'DELETE', 'url' => '/peliculas/'.$pelicula->id, 'class' => 'd-inline']) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    <br />
    <a href="{!! asset('bienvenida') !!}">REGRESAR</a>

</body>
</html>
