<?php
// Establecer cookies
setcookie("user", "Tú", time() + 3600, "/");
setcookie("color", "Zanahoria", time() + 3600, "/");
// Mostrar cookies
echo "<p>Las cookies instaladas son:</p>"; 
echo "<p>". $_COOKIE['user'] . "</p>";
echo "<p>". $_COOKIE['color'] . "</p>";
// Forzar renovación de cookies
if (isset($_POST['renueva'])) {
// Establecer nuevas cookies con una fecha de expiración extendida
setcookie("user", $_COOKIE["user"], time() + 3600, "/");
setcookie("color", $_COOKIE["color"], time() + 3600, "/");
echo "<p>Las cookies se han renovado.</p>";
}
// Forzar borrado de cookies
//if (isset($_POST['borra'])) {
    // Establecer nuevas cookies revirtiendo la fecha de expiración
//    setcookie("user", $_COOKIE["user"], time() - 3600 *24 * 30, "/");
//    setcookie("color", $_COOKIE["color"], time() - 3600 *24 * 30, "/");
//    echo "<p>Las cookies se han borrado.</p>";
//    }
// poner abajo: <input type="submit" name="borra" value="Borrar cookies">
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galletas</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<input type="submit" name="renueva" value="Renovar cookies">
</form>
</body>
</html>