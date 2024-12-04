
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha en Español</title>
</head>
<body>

<?php
$diaSemana = date("N"); // Día de la semana (1-7)
$dia = date("d");       // Día del mes
$mes = date("n");       // Mes (1-12)
$anio = date("Y");      // Año

$dias = ["lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo"];
$meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
 
echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') 
?>

</body>
</html>
