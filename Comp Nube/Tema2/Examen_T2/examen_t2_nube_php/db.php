
<?php   

    $host = 'databaseluisestrada.mysql.database.azure.com';
    $username = 'adminmysql';
    $password = 'PWDMysql123';
    $db_name = 'db_19280887';


    $conexion = mysqli_init();
    mysqli_ssl_set($conexion, NULL, NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);

    mysqli_real_connect($conexion, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);


    if(mysqli_connect_errno())
    {
        die('filed to connect to MYSQL: '.mysqli_connect_error
        ());
    }



    
?>
