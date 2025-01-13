<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen de Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            margin: 20px 0;
        }
        input[type="text"], input[type="file"], input[type="submit"] {
            margin: 10px;
        }
    </style>
</head>
<body>
<h1>Sube tu Imagen de Perfil</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
    <p>
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required>
    </p>
    <p>
        <label for="archivo">Subir una imagen:</label><br>
        <input type="file" name="archivo" id="archivo" accept="image/*" required>
    </p>
    <p>
        <input type="submit" name="enviar" value="Subir">
    </p>
</form>

<?php
if (isset($_POST['enviar'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $archivo = $_FILES['archivo']['name'];

    if (isset($archivo) && $archivo != "") {
        $tipo = $_FILES['archivo']['type'];
        $tamano = $_FILES['archivo']['size'];
        $temp = $_FILES['archivo']['tmp_name'];

        if (!((strpos($tipo, "gif") !== false || strpos($tipo, "jpeg") !== false || strpos($tipo, "jpg") !== false || strpos($tipo, "png") !== false) && ($tamano <= 2000000))) {
            echo '<p style="color:red;"><b>Error:</b> La extensión o el tamaño del archivo no es correcto.<br>
            - Se permiten archivos .gif, .jpg, .png de hasta 2 MB.</p>';
        } else {
            $rutaDestino = 'images/' . $archivo;
            if (!is_dir('images')) {

                mkdir('images', 0777, true);
            }
            if (move_uploaded_file($temp, $rutaDestino)) {
                chmod($rutaDestino, 0777);
                echo '<h2>¡Bienvenido, ' . $nombre . '!</h2>';
                echo '<p><img src="' . $rutaDestino . '" alt="Imagen de perfil"></p>';
            } else {
                echo '<p style="color:red;">Ocurrió un error al subir el archivo. No pudo guardarse.</p>';
            }
        }
    } else {
        echo '<p>;">Por favor, selecciona un archivo.</p>';
    }
}
?>
</body>
</html>

