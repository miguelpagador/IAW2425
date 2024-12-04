<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla del 1 al 10</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Números</th>
    </tr>

    <?php
    $i = 1; // Inicializar contador
    while ($i <= 10) {
        echo "<tr><td>$i</td></tr>"; // Generar fila para cada número
        $i++; // Incrementar el contador
    }
    ?>

</table>

</body>
</html>

