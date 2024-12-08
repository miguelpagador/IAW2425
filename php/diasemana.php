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
        if (case = 1){
        echo "<p>Hoy en lunes, comienza la semana.</p>";}
        else if (case = 2){
        echo "<p>Ya es martes.</p>";}
        else if (case = 3){
        echo "<p>Miércoles, siempre en medio.</p>";}
        else if (case = 4){
        echo "<p>¿Hoy es jueves? ¡Ay la madre que me parió!</p>";}
        else if (case = 5){
        echo "<p>Viernes, un poco más y a descansar.</p>";}
        else if (case = 6){
        echo "<p>Sábado, sabadete.</p>";}
        else if (case = 7){
        echo "<p>Domingo... </p>";}
        else {
        echo "<p>Esto sale si no carga los días por alguna razón.</p>";}
}
?>
</body>
</html>