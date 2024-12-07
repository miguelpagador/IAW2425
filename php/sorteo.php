<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
        <label for="numero">Indica un número de dos cifras</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" name="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['numero']) && !empty($_POST['numero'])) {
            $numero = $_POST['numero'];
            $premio = rand(1, 99);
            if ($numero==$premio){
            echo "<p>¡Te ha tocado!";}
            else {echo "<p>Lo siento, no te ha tocado";}
        } else {
            echo "<p>No ha indicado ningún número</p>";
        }
    }
    ?>
</body>
</html>