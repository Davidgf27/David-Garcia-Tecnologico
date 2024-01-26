<?php 
require_once('ORM/Database.php');
require_once('ORM/Orm.php');
require_once('ORM/Productos.php');

$db= new Database();
$encontrado=$db->verificarDriver();

if($encontrado){
    $cnn= $db->getConnection();
    $productosModelo= new Productos($cnn);
    $productos= $productosModelo->getAll();

    foreach ($productos as $producto) {
        print("===========================================<br>");
        print("Producto <br>");
        print("===========================================<br>");
        print("ID: ".$producto['id']."<br>");
        print("Nombre: ".$producto['nombre']."<br>");
        print("Precio: ".$producto['precio']."<br>");
        print("Stock: ".$producto['stock']."<br>");
    }
}

?>