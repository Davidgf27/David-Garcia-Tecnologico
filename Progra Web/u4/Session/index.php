<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion simple</title>
</head>

<body>
    <h1>Usando Sesiones en PHP</h1>
    <br>
    <?php
    //Guardar datos de session
    $_SESSION["usuario"] = "Peter";
    ?>
    <p>Sesión iniciada y establecido nombre de usuario!</p>
    <a href="siguiendo.php">Ir a página donde se usa la sesión!</a>
</body>

</html>