<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div align="center">
        <p>Iniciar sesión</p>
        <form action="login.php" method="POST">
            <label>Usuario</label><br>
            <input type="text" name="usrName" placeholder="Ingresar usuario" required /><br>
            <label>Contraseña</label><br>
            <input type="password" name="usrPwd" placeholder="Ingresar password" required /><br>
            <input type="submit" name="btnIngresar" value="Ingresar" /><br>
        </form>
    </div>
</body>

</html>