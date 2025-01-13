<!doctype html>
<html>
<head></head>
<body>
    <?php
    $dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    echo "Hoy es " . $dias[date('w')] . ", " . date('d') . " de " . $meses[date('n') - 1] . " de " . date('Y') .
        " a las " . date('H') . " y " . date('i');
    ?>
</body>
</html>
