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
    <p>El siguiente botón hara que su evento click llame a un archivo externo por post</p>
    <p>Enviando parametros y recibiendo respuesta</p>
    <button>Haz click para llamar con post</button>
    <div id="agregar"></div>
    <script>
        $(document).ready(function(){
            $("button").click(function(e){
                e.preventDefault();
                var msj = "Travieso y latoso";
                $.post("funcionPHP.php", {valor: msj}, function(htmlexterno){
                    $("#agregar").html(htmlexterno);
                });
            });
        });
    </script>
</body>
</html>