<?php
// Conectar a la base de datos (debes configurar la conexión)

$conexion = new mysql("localhost", "usu_tema1", "PWDTema1", "examen_tema1");
/*
// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consultar la lista de alumnos
$sql = "SELECT ID, NOMBRE FROM CARRERAS ";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Lista de Carreras:</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>NOMBRE</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["NOMBRE"] . "</td>";
        echo "</tr>";
    }
    echo "</ul>";
} else {
    echo "No hay alumnos registrados";
}
*/
echo "<br><a href=\"index.html\"><button>Volver a Inicio</button></a>";

// Cerrar la conexión
$conexion->close();
?>
