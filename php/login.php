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
        <input type="text" id="nombre" name="nombre" required>
        <label for="contraseña">Contraseña:</label>
        <input type="text" id="contraseña" name="contraseña" required>
        <input type="submit" name="submit" value="Enviar">
    </form>
<?php
if (isset($_POST['submit'])) {
if (isset($_POST['nombre']) && !empty($_POST['nombre']) 
&& isset($_POST['contraseña']) && !empty($_POST['contraseña'])) {
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $contraseña = $_POST['contraseña'];
    if ($nombre=='admin' && $contraseña=='H4CK3R4$1R') {
        echo "<p>Acceso concedido</p>";    
    }
    else {echo "Acceso denegado";}
} else {
    echo "<p>Por favor, escriba su nombre y contraseña</p>";
}}
?>
</body>
</html>