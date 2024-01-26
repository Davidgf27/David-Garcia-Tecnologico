<?php
// Establecer las credenciales de la base de datos
$host = 'localhost';
$dbname = 'veterinaria';
$user = 'davidgf';
$password = '123456';

// Conectar a la base de datos
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}

// Obtener los datos del formulario
$usuario = $_POST['username'];
$contrasena = $_POST['login'];

// Consultar la base de datos para verificar las credenciales
$query = $pdo->prepare("SELECT * FROM usuarios WHERE login = ? AND pwd = ?");
$query->execute([$usuario, $contrasena]); 
$userData = $query->fetch(PDO::FETCH_ASSOC);

// Verificar si las credenciales son válidas
if ($userData) {
    // Las credenciales son válidas, redirigir a la página HTML
    header("Location: inicio.html");
    exit(); // Asegura que el script se detenga después de la redirección
} else {
    // Las credenciales son inválidas, mostrar mensaje de error
    echo "<script>alert('Usuario o contraseña incorrectos.');setTimeout(function(){window.location.href = 'index.html';},2000);</script>";// Redirigir después de 10 milisegundos)
}
?>

