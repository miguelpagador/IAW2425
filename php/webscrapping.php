<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatarreros de webs</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="url">URL:</label>
        <input type="text" id="url" name="url" placeholder="http://example.com" required>
        <input type="submit" name="submit" value="Obtener correos electrónicos">
    </form>

    <?php
    function obtenerCorreos($contenido)
    {
        // La expresión regular para determinar que es un correo
        $patron = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';
        preg_match_all($patron, $contenido, $bingo);
        return $bingo[0];
    }

    if (isset($_POST['submit'])) {
        // La página que pide
        $url = $_POST['url'];
        $contenido = file_get_contents($url);
        // Encontrar correos de la página
        $correos = obtenerCorreos($contenido);
        if (!empty($correos)) {
            echo '<p>Direcciones de correo electrónico encontradas:</p>';
            echo '<ul>';
            foreach ($correos as $correo) {
                echo '<li>' . $correo . '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No se encontraron direcciones de correo electrónico.</p>';
        }
    }
    ?> 
</body>
</html>