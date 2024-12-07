<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="text" name="nombre">
        <input type="password" name="contrasena">
        <input type="submit" value="login">
    </form>
    <?php
    $usuario = htmlspecialchars($_POST["nombre"]);
    $contrasena = htmlspecialchars($_POST["contrasena"]);
    if ($usuario != "" && $contrasena != "") {
        if ($usuario == "admin" && $contrasena == "H4CK3R4$1R"){
            echo "Enhorabuena, te has logueado";
        }
        else {
            echo "Introduce las credenciales correctas";
        }
    }
    else {
        echo "Introduce algún valor en las dos cajas";
    }
    ?>
</body>
</html>