<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <h1>Mostrando el método load en Ajax</h1>
    <p>El siguiente botón hara que su evento click llame a un archivo externo y su contenido lo ponga abajo de él</p>
    <button>Haz click para llamar con load</button>
    <div id="agregar"></div>
    <script>
        $(document).ready(function(){
            $("button").click(function(event){
                $("#agregar").load("archCargar.php");
            });
        });
    </script>
</body>
</html>