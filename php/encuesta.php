<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <p><label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required></p>
        <p><label for="preg1">¿Dónde escuchas música?</label>
    <select name="opciones1" id="preg1">
        <option value="Spotify">Spotify</option>
        <option value="YouTube">YouTube</option>
        <option value="MP3">MP3</option>
      </select></p>
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
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $opciones1 = filter_var($_POST['opciones1'], FILTER_SANITIZE_STRING);
    $checkbox = '';
    $checkbox .= isset($_POST['bolos']) ? filter_var('Bolos', FILTER_SANITIZE_STRING) . ' ' : '';
    $checkbox .= isset($_POST['deportes']) ? filter_var('Deportes', FILTER_SANITIZE_STRING) . ' ' : '';
    $checkbox .= isset($_POST['videojuegos']) ? filter_var('Videojuegos', FILTER_SANITIZE_STRING) . ' ' : '';
    $uso = filter_var($_POST['uso'], FILTER_SANITIZE_STRING);

    echo "<p>$nombre, escuchas música en $opciones1, te gustan los $checkbox y usas principalmente $uso</p>";
}
?>
</body>
</html>