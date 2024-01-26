<?php 
require_once('ORM/Database.php');
require_once('ORM/Orm.php');
require_once('ORM/Productos.php');

$db= new Database();
$encontrado=$db->verificarDriver();

if($encontrado){
    $cnn= $db->getConnection();
    $productosModelo= new Productos($cnn);
    $insert =[];

    $insert['nombre'] = 'PC';
    $insert['precio'] = 18000;
    $insert['stock'] = 20;
    
    if($productosModelo->insert($insert))
    echo "<br>Producto insertado";
    else
    echo "<br>No se pudo insertar";
}

?>