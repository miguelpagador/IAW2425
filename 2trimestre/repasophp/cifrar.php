<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cifrado</title>
</head>
<body>
<h2>Vamos a cifrar un texto</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <textarea name="texto" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Cifrar">
</form>

<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el texto del formulario
    $texto = $_POST['texto'];

    // Verificar si se ingresó un texto
    if (!empty($texto)) {
        // Cifrar el texto
        $texto_cifrado = crypt($texto);

        // Mostrar el texto cifrado
        echo "<h3>Texto Cifrado:</h3>";
        echo "<p>$texto_cifrado</p>";
    } else {
        echo "<p>No se ha ingresado ningún texto.</p>";
    }
}
?>

</body>
</html>