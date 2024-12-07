<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentareto</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <p><label for="nombre">Nombre:</label><input type="text" id="nombre" name="nombre" required></p>
    <p><label for="apellidos">Apellidos:</label><input type="text" id="apellidos" name="apellidos" required></p>
    <p><label for="mail">Email:</label><input type="email" id="mail" name="mail" required></p>
    <p><label for="dni">DNI:</label><input type="text" id="dni" name="dni" required></p>
    <p><label for="salario">Salario bruto:</label><input type="number" id="salariio" name="salario" required></p>
    <p>Dona una cantidad a labores sociales
<input type="radio" name="ong" value="si">Sí
<input type="radio" name="ong" value="no">No
    </p>
    <p><input type="submit" name="submit" value="Enviar datos"></p>
    </form>
    <?php
if (isset($_POST['submit'])) {
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellidos = filter_var($_POST['apellidos'], FILTER_SANITIZE_STRING);
    $mail = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);
    $DNI = filter_var($_POST['dni'], FILTER_SANITIZE_STRING);
    $salario = filter_var($_POST['salario'], FILTER_SANITIZE_STRING);
    $tipo=0;
if ($salario < 0){echo "Por favor, introduzca un número válido";}
elseif ($salario < 10000){$tipo=0.05;}
elseif ($salario < 20000){$tipo=0.15;}
elseif ($salario < 35000){$tipo=0.20;}
elseif ($salario < 60000){$tipo=0.30;}
else {$tipo=0.45;}
$ong = filter_var($_POST['ong'], FILTER_SANITIZE_STRING);
if ($ong == 'si') {$impuesto = ($salario * $tipo) - (0.02 * ($salario * $tipo));}
else {$impuesto = $salario * $tipo;}
    echo "<p>Su tipo impositivo es el " . ($tipo * 100) . " %</p>";
    echo "<p>Su importe a pagar es $impuesto</p>";
}
?>
</body>
</html>