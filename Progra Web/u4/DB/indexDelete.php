<?php 
require_once('ORM/Database.php');
require_once('ORM/Orm.php');
require_once('ORM/Productos.php');

$db= new Database();
$encontrado=$db->verificarDriver();

if($encontrado){
    $cnn= $db->getConnection();
    $productosModelo= new Productos($cnn);
    if($productosModelo->deleteById(1))
    echo "Producto eliminado";
    else
    echo "No existe ese producto";
}

?>