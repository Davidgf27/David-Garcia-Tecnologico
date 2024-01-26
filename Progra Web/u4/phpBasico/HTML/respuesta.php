<?php
echo "<pre>";
var_dump($_GET);
echo "</pre>";
if (isset($_GET["name"]) && is_string($_GET["name"])) {
    $nombre = $_GET["name"];
    echo 'La variable $name = ' . $nombre . ' si es un string <br>';
}

$nombre = $_GET["name"];
$sexo = $_GET["genero"];

if ($sexo == "Femenino") {
?>
    Bienvenida <?php echo $nombre ?> <br>
<?php
} else {
?>
    Bienvenido <?php echo $nombre ?> <br>
<?php
}
?>