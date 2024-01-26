<?php 
require_once('ORM/Database.php');
require_once('ORM/Orm.php');
require_once('ORM/Productos.php');

$db= new Database();
$encontrado=$db->verificarDriver();

if($encontrado){
    $cnn= $db->getConnection();
    $productosModelo= new Productos($cnn);
    $actualizar =[];

    $actualizar['nombre'] = 'RedmiNote8';
    $actualizar['precio'] = 3200;
    
    if($productosModelo->updateById(4,$actualizar))
    echo "<br>Producto actualizado";
    else
    echo "<br>No existe ese producto, no se puede modificar";
}

?>