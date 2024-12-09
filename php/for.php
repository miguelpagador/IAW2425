<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de for</title>
</head>
<body>
    <table>
        <tr> 
            <?php
            for ($x = 1; $x <= 10; $x++) {
                echo "<td>$x</td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>