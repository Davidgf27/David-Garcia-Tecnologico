<!DOCTYPE html>
<html>
<head>
    <title>Registro de Alumnos</title>
</head>
<body>
    <h1>Registro de Alumnos</h1>
    <form action="procesar.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre de la Carrera" required>
        <button type="submit">Guardar Alumno</button>
    </form>
	
	<h1>Consulta de Datos</h1>
    
    <!-- Botón para realizar la consulta -->
    <form action="consulta.php" method="post">
        <button type="submit">Consultar Datos</button>
    </form>
</body>
</html>
