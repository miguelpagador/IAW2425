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
        echo "<p>Orale putos, ya es martes. ¡¡¡¡¡AAAAAAAAAAAAAAAAAAAAAAAAA!!!!!</p>";}
        else if (case = 3){
        echo "<p>Miércoles, siempre en medio.</p>";}
        else if (case = 4){
        echo "<p>¿Hoy es jueves? ¡Ay la madre que me parió!</p>";}
        else if (case = 5){
        echo "<p>Viernes, un poco más y a descansar.</p>";}
        else if (case = 6){
        echo "<p>Sábado, sabadete. La rima se hace sola.</p>";}
        else if (case = 7){
        echo "<p>Domingo... espero que esté todo listo para el lunes</p>";}
        else {
        echo "<p>Esto sale si no carga los días por alguna razón. ¿Qué has roto, Jesús?</p>";}
}
?>
</body>
</html>