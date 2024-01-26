<?php 
require_once('DataBase.php');
require_once('Orm.php');
require_once('Usuario.php');
$db= new Database();
$encontrado= $db->verificarDriver();
if ($encontrado) {
    $cnn = $db->getConnection();
    $usrModelo = new Usuario($cnn);
    $login = $_POST["usrName"];
    $password = sha1($_POST["usrPwd"]);
    $data = "login = '".$login."'AND pwd= '".$password."'";
    $usuario = $usrModelo->validaLogin($data);
    if ($usuario) {
        $usr = $usuario['nombre'];
        $_SESSION["usr"] = $usr;
        require_once("homeUsr.php");
    } else {
        echo "<br>No se encontro usuario";
        require_once("index.php");
    }
}
?>