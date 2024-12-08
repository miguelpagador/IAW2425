<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Día semana</title>
</head>
<body>
<?php
$dia = date('N');

switch ($dia) {
    case 1:
        echo "<p>Hoy es lunes, comienza la semana.</p>";
        break;
    case 2:
        echo "<p>Orale putos, ya es martes.</p>";
        break;
    case 3:
        echo "<p>Miércoles, siempre en medio.</p>";
        break;
    case 4:
        echo "<p>¿Hoy es jueves?</p>";
        break;
    case 5:
        echo "<p>Viernes, un poco más y a descansar.</p>";
        break;
    case 6:
        echo "<p>Sábado, sabadete.</p>";
        break;
    case 7:
        echo "<p>Domingo...</p>";
        break;
    default:
        echo "<p>Esto sale si no carga los días por alguna razón.</p>";
        break;
}
?>
</body>
</html>
