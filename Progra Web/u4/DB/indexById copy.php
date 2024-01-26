<?php 
require_once('ORM/Database.php');
require_once('ORM/Orm.php');
require_once('ORM/Productos.php');

$db= new Database();
$encontrado=$db->verificarDriver();

if($encontrado){
    $cnn= $db->getConnection();
    $productosModelo= new Productos($cnn);
    $productos= $productosModelo->getById(1);
    if($productos==null)
    print("No hay un producto con ese ID: ");
    else{
        print("===========================================<br>");
        print("Productos <br>");
        print("===========================================<br>");
        print("ID: ".$productos['id']."<br>");
        print("Nombre: ".$productos['nombre']."<br>");
        print("Precio: ".$productos['precio']."<br>");
        print("Stock: ".$productos['stock']."<br>");
    }
}

?>