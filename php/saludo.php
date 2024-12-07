<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario saluda</title>
</head>
<body>
    <form action="saludo.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" name="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $fecha = date("d/m/y");
            echo "<p>Hola $nombre, hoy es $fecha</p>";
        } else {
            echo "<p>No ha indicado ningún nombre</p>";
        }
    }
    ?>
</body>
</html>