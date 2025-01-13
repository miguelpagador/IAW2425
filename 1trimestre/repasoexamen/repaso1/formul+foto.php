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

<!-- Formulario para cargar imagen -->
<form action="formulario.php" method="post" enctype="multipart/form-data">
    <p>
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required>
    </p>
    <p>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required>
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
    $datos = [
        'REMOTE_ADDR' => ['Dirección IP del cliente', $_SERVER['REMOTE_ADDR']],
        'HTTP_USER_AGENT' => ['Navegador del cliente', $_SERVER['HTTP_USER_AGENT']],
        'REQUEST_METHOD' => ['Método HTTP utilizado', $_SERVER['REQUEST_METHOD']],
        'PHP_SELF' => ['Ruta relativa del script actual', $_SERVER['PHP_SELF']],
    ];

    $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8'); 
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $archivo = $_FILES['archivo']['name'];

    if (isset($archivo) && $archivo != "") {
        $tipo = $_FILES['archivo']['type'];
        $tamano = $_FILES['archivo']['size'];
        $temp = $_FILES['archivo']['tmp_name'];

        $tiposPermitidos = ['image/gif', 'image/jpeg', 'image/png'];
        if (!in_array($tipo, $tiposPermitidos)) {
            echo '<p><b>Error:</b> Solo se permiten archivos .gif, .jpg, .png.</p>';
        }
        elseif ($tamano > 2000000) {
            echo '<p><b>Error:</b> El archivo es demasiado grande. Solo se permiten archivos de hasta 2 MB.</p>';
        } else {
            $rutaDestino = 'uploads/' . $archivo;
            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }

            if (move_uploaded_file($temp, $rutaDestino)) {
                chmod($rutaDestino, 0777);

                echo '<h2>¡Bienvenido, ' . $nombre . '!</h2>';
                echo '<h2>Tu correo es: ' . $email . '</h2>';
                echo '<h2> Tu imagen de perfil es la siguiente:</h2>';
                echo '<p><img src="' . $rutaDestino . '" alt="Imagen de perfil"></p>';

                echo '<table border="1">';
                echo '<tr><th>Parámetro</th><th>Valor</th><th>Descripción</th></tr>';
                foreach ($datos as $clave => $datosItem) {
                    $descripcion = $datosItem[0];
                    $valor = htmlspecialchars($datosItem[1]); // Escapando caracteres especiales
                    echo "<tr>
                            <td><strong>$clave</strong></td>
                            <td>$valor</td>
                            <td>$descripcion</td>
                          </tr>";
                }
                echo '</table>';
            } else {
                echo '<p>Ocurrió un error al subir el archivo. No pudo guardarse.</p>';
            }
        }
    } else {
        echo '<p>Por favor, selecciona un archivo.</p>';
    }
}
?>
</body>
</html>
