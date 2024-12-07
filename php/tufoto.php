<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu foto</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
    <p><label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required></p>
    <p><label for="foto">Foto:</label>
    <input type="file" name="foto"></p>
    <p><input type="submit" name="submit" value="Enviar datos"></p>
    </form>
<?php
if (isset($_POST['submit'])) {
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);

    if (isset($_FILES['foto'])) {
        $foto = $_FILES['foto'];
        if ($foto['error'] === UPLOAD_ERR_OK) {
            $destino = 'img/' . $foto['name'];
            if (move_uploaded_file($foto['tmp_name'], $destino)) {
                echo "<p>$nombre</p><p><img src='https://myblog-akoycdevr3.live-website.com/php/$destino'></p>";
            } else {
                echo "Error al mover el archivo a la carpeta de destino.";
            }
        } else {
            echo "Error en la carga del archivo: " . $foto['error'];
        }
    }
}
?>
</body>
</html>