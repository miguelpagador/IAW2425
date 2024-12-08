<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='refresh' content='60'>
    <title>Fecha y hora</title>
</head>
<body>
    <h1>Fecha y hora actual</h1>
    <?php
        date_default_timezone_set('Europe/Madrid');
        setlocale(LC_TIME, 'es_ES.UTF-8', 'spanish');
        echo "Hoy es " . date("l") . " " . date("d/m/Y") . " y son las " . date("h:i:sa");
    ?>
</body>
</html>