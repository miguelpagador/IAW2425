<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguee usted</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña">
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['nombre']) && !empty($_POST['nombre']) 
            && isset($_POST['contraseña']) && !empty($_POST['contraseña'])) {
            
            $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
            $contraseña = htmlspecialchars($_POST['contraseña'], ENT_QUOTES, 'UTF-8');

            if ($nombre == 'admin' && $contraseña == 'H4CK3R4$1R') {
                echo "<p>Acceso concedido</p>";    
            } else {
                echo "<p>Acceso denegado</p>";
            }
        } else {
            echo "<p>Por favor, escriba su nombre y contraseña</p>";
        }
    }
    ?>
</body>
</html>
