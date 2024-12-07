<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo 2</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
        <p><label for="participantes">Lista de Participantes (separados por comas):</label>
        <textarea id="participantes" name="participantes" rows="5" cols="50" required></textarea></p>
        <p><label for="numero">Número de Premios a Sortear:</label>
        <input type="number" id="numero" name="numero" required></p>
        <p><input type="submit" name="submit" value="Realizar Sorteo"></p>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['participantes']) && isset($_POST['numero'])) {
            $participantes = explode(',', $_POST['participantes']);
            $numero = $_POST['numero'];
            if (count($participantes) < $numero) {
                echo "<p>No hay suficientes participantes para el número de premios especificado.</p>";
            } else {
                shuffle($participantes);
                $ganadores = array_slice($participantes, 0, $numero);
                echo "<p>Ganadores:</p>";
                foreach ($ganadores as $ganador) {
                    echo "<p>$ganador</p>";
                }
            }
        } else {
            echo "<p>Por favor, completa todos los campos.</p>";
        }
    }
    ?>
</body>
</html>