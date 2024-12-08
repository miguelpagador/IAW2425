<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </p>
        <p>
            <label for="preg1">¿Dónde escuchas música?</label>
            <select name="opciones1" id="preg1">
                <option value="Spotify">Spotify</option>
                <option value="YouTube">YouTube</option>
                <option value="MP3">MP3</option>
            </select>
        </p>
        <p>Indica tus intereses:
            <input type="checkbox" name="bolos"> Bolos
            <input type="checkbox" name="deportes"> Deportes
            <input type="checkbox" name="videojuegos"> Videojuegos
        </p>
        <p>¿Qué usas más?
            <input type="radio" name="uso" value="televisión">Televisión
            <input type="radio" name="uso" value="PC">Ordenador
            <input type="radio" name="uso" value="móvil">Móvil
        </p>
        <p><input type="submit" name="submit" value="Enviar datos"></p>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
        $opciones1 = htmlspecialchars($_POST['opciones1'], ENT_QUOTES, 'UTF-8');
        
        $checkbox = '';
        $checkbox .= isset($_POST['bolos']) ? 'Bolos ' : '';
        $checkbox .= isset($_POST['deportes']) ? 'Deportes ' : '';
        $checkbox .= isset($_POST['videojuegos']) ? 'Videojuegos ' : '';
        
        $uso = htmlspecialchars($_POST['uso'], ENT_QUOTES, 'UTF-8');

        echo "<p>$nombre, escuchas música en $opciones1, te gustan los $checkbox y usas principalmente $uso</p>";
    }
    ?>
</body>
</html>
