<?php 
require_once('Database.php');
require_once('Orm.php');
require_once('Usuario.php');

$db= new Database();
$encontrado=$db->verificarDriver();

if($encontrado){
    $cnn= $db->getConnection();
    $usrModelo= new Usuario($cnn);
    $insert =[];

    $insert['nombre'] = 'Andres Lionel Messi Cuccitini';
    $insert['login'] = 'messi@goat.com';
    $insert['pwd'] = sha1('cr7yFranciaSegundos');
    $insert['rol'] = strtoupper('CLIENT');
    
    if($usrModelo->insert($insert))
    echo "<br>Usuario insertado";
    else
    echo "<br>No se pudo insertar";
}

?>