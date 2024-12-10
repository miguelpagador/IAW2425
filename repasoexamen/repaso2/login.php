<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <input type="text" name="usuario" placeholder="Introduzca su usuario" required> 
        <input type="password" name="contraseña" placeholder="Introduzca su contraseña" required>
        <input type="submit" name="submit" value="Iniciar sesión">
    </form>

    <?php
        include('config.php'); 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = htmlspecialchars($_POST["usuario"]);
            $contraseña = htmlspecialchars($_POST["contraseña"]);

            if ($usuario == usuario && $contraseña == contraseña) {
                echo "<p>Acceso permitido</p>";
            } else {
                echo "<p>Acceso denegado</p>";
            }
        }
    ?>
</body>
</html>
