<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números en fila</title>
    <style>
        td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<td>$i</td>"; // Mostrar números en una fila
        }
        ?>
    </tr>
</table>

</body>
</html>

