<?php
// Conexión a la base de datos
$conexion = new mysqli("127.0.0.1", "usu_tema1", "PWDTema1", "examen_tema1");

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Procesa el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];

    // Inserta la carrera en la base de datos
    $sql = "INSERT INTO ALUMNOS (nombre) VALUES ('$nombre')";
    if ($conexion->query($sql) === TRUE) {
        echo "Alumno correctamente.";
    } else {
        echo "Error al registrar alumno: " . $conexion->error;
    }
}
echo "<br><a href=\"index.php\"><button>Volver a Inicio</button></a>";


// Cierra la conexión
$conexion->close();
?>
