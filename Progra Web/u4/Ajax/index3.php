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
    <p>El siguiente botón hara que su evento click llame a un archivo externo por Ajax post</p>
    <p>Enviando parametros y recibiendo respuesta</p>
    <button>Haz click para llamar con post</button>
    <div id="agregar"></div>
    <p id="p1"></p>
    <script>
        $(document).ready(function() {
            $("button").click(function(e) {
                e.preventDefault();
                var msj = "Travieso y latoso";
                $.ajax({
                    type: "POST",
                    url: "ajaxPost.php",
                    data: {
                        valor: msj
                    },
                    success: function(result) {
                        $("#agregar").html(result);
                    }
                });
            });
        });
    </script>
</body>

</html>