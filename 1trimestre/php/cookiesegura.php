<?php
$clave = 'AvEr5IgÜwa12';

// Verificar si se envió el formulario
if (isset($_POST['submit'])) {
    // Obtener el nombre de usuario del formulario
    $usuario = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);

    // Calcular el hash y establecer las cookies seguras
    $hash = hash('sha256', $usuario . $clave);
    setcookie('usuario', $usuario, time() + 3600, "/");
    setcookie('hash', $hash, time() + 3600, "/");
}

// Verificar si la cookie existe y es válida
if (isset($_COOKIE['usuario']) && isset($_COOKIE['hash'])) {
    $hashete = hash('sha256', $_COOKIE['usuario'] . $clave);

    if ($_COOKIE['hash'] === $hashete) {
        echo "<p>Bienvenido, " . $_COOKIE['usuario'] . ".</p>";
    } else {
        echo "<p>Error de autenticación.</p>";
    }
} else {
    echo "<p>No se encontraron cookies válidas.</p>";
}
//Esto permite que podamos impedir que alguien impersone a otra persona y pueda hacer acciones maliciosas como si fuera otro, aprovechando su cuenta.
//Opciones como sanitizar entradas o guardar codificado en hash ciertos datos hace que podamos estar algo más seguros ante esos ataques
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galletas seguras</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>