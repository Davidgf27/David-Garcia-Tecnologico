<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM Juegos WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        $juego = mysqli_fetch_assoc($result);
    
        if ($juego) {
            echo json_encode($juego);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Juego no encontrada']);
        }

    }else{
       
        $result = mysqli_query($conexion, 'SELECT j.id, j.nombre nombre, c.nombre categoria, p.nombre plataforma, 
        j.imagen FROM Juegos j 
        join categorias c on j.id_categoria = c.id 
        join plataformas p on j.id_plataforma = p.id 
        where j.status=1');
        $plataformas = [];
    
        while ($row = mysqli_fetch_assoc($result)) {
            $plataformas[] = $row;
        }
    
        echo json_encode($plataformas);
    }

}
    

// Actualizar una juego
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

    if (isset($_GET['id'], $_GET['nombre'])) {
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $categoria = $_GET['id_categoria'];
        $plataforma = $_GET['id_plataforma'];
        $imagen = $_GET['imagen'];
        

        $query = "UPDATE Juegos SET nombre='$nombre', id_categoria='$categoria', id_plataforma='$plataforma', imagen='$imagen' WHERE id=$id";
        $result = mysqli_query($conexion, $query);

        if ($result) {
            echo json_encode(['message' => 'Juego actualizada con éxito']);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Error al actualizar la juego']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Faltan datos para actualizar la juego']);
    }
}

// Crear una nueva juego
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        $categoria = $_GET['id_categoria'];
        $plataforma = $_GET['id_plataforma'];
        $imagen = $_GET['imagen'];
        $status = isset($_GET['status']) ? $_GET['status'] : 1;

        $query = "INSERT INTO Juegos (nombre, id_categoria, id_plataforma, imagen, status) 
        VALUES 
        ('$nombre', '$categoria', '$plataforma', '$imagen', '$status')";
        $result = mysqli_query($conexion, $query);

        if ($result) {
            echo json_encode(['message' => 'Juego creada con éxito']);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Error al crear la juego']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Falta el nombre de la juego']);
    }
}

// Borrar una juego
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "UPDATE Juegos SET status=0 WHERE id=$id";
        $result = mysqli_query($conexion, $query);

        if ($result) {
            echo json_encode(['message' => 'Juego eliminada con éxito']);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Error al eliminar la juego']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Falta el ID de la juego a eliminar']);
    }
}
?>
