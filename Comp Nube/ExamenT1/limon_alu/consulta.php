<?php
// Conexión a la base de datos
$conexion = new mysqli("127.0.0.1", "usu_tema1", "PWDTema1", "examen_tema1");

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para obtener todos los datos de la tabla
$sql = "SELECT ID, NOMBRE FROM ALUMNOS";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Muestra los datos en una tabla HTML
    echo "<h2>Datos de la Tabla:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["NOMBRE"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron datos en la tabla.";
}
echo "<br><a href=\"index.php\"><button>Volver a Inicio</button></a>";
// Cierra la conexión
$conexion->close();
?>