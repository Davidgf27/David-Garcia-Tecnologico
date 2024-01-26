<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM Categorias WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        $plataforma = mysqli_fetch_assoc($result);
    
        if ($plataforma) {
            echo json_encode($plataforma);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Categoria no encontrada']);
        }

    }else{
       
        $result = mysqli_query($conexion, 'SELECT * FROM Categorias where status=1');
        $plataformas = [];
    
        while ($row = mysqli_fetch_assoc($result)) {
            $plataformas[] = $row;
        }
    
        echo json_encode($plataformas);
    }

}
    

// Actualizar una plataforma
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

    if (isset($_GET['id'], $_GET['nombre'])) {
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];

        $query = "UPDATE Categorias SET nombre='$nombre' WHERE id=$id";
        $result = mysqli_query($conexion, $query);

        if ($result) {
            echo json_encode(['message' => 'Categoria actualizada con éxito']);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Error al actualizar la plataforma']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Faltan datos para actualizar la plataforma']);
    }
}

// Crear una nueva plataforma
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        $status = isset($_GET['status']) ? $_GET['status'] : 1;

        $query = "INSERT INTO Categorias (nombre, status) VALUES ('$nombre', '$status')";
        $result = mysqli_query($conexion, $query);

        if ($result) {
            echo json_encode(['message' => 'Categoria creada con éxito']);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Error al crear la plataforma']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Falta el nombre de la plataforma']);
    }
}

// Borrar una plataforma
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "UPDATE Categorias SET status=0 WHERE id=$id";
        $result = mysqli_query($conexion, $query);

        if ($result) {
            echo json_encode(['message' => 'Categoria eliminada con éxito']);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Error al eliminar la plataforma']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Falta el ID de la plataforma a eliminar']);
    }
}
?>
