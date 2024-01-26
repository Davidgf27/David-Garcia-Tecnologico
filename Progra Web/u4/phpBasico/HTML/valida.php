<?php
$nombre = $edad = $correo = $nombreErr = $edadErr = $correoErr = $Errore = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"])) {
        $nameErr = "Nombre es requerido";
        $Errore = "si";
    } else {
        $nombre = verificaEntrada($_POST["nombre"]);
    }
    if (empty($_POST["edad"])) {
        $edadErr = "Edad es requerida";
        $Errore = "si";
    } else {
        $edad = verificaEntrada($_POST["edad"]);
        if ($edad < 18) {
            $edadErr = "La edad debe ser mayor o igual a 18";
            $Errore = "si";
        }
    }
    $correo = filter_var($_POST["correo"], FILTER_SANITIZE_EMAIL);
    if (filter_var($_POST["correo"], FILTER_SANITIZE_EMAIL) == false) {
        $correoErr = "No es un email valido";
        $Errore = "si";
    }
}
function verificaEntrada($entrada)
{
    $entrada = trim($entrada);
    $entrada = stripslashes($entrada);
    $entrada = htmlspecialchars($entrada);
    return $entrada;
}

require_once "includes/header.php";
if ($nombre != "") {
    if ($Errore == "") {
        echo '<div class="jumbotron-fluid">';
        echo '<p class="text-center bg-info">' .$nombre ."Sus datos han sido aceptados</p>";
        echo '</div>'
    }
}
require_once "includes/footer.php";
