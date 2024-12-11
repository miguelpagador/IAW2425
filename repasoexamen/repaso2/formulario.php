<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Completo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input, textarea, select {
            margin: 10px;
            width: 300px;
            padding: 8px;
            font-size: 14px;
        }
        input[type="submit"] {
            width: 150px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>Formulario Completo</h1>

<form action="formulario_completo.php" method="post">
    <p>
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required>
    </p>
    <p>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required>
    </p>
    <p>
        <label for="telefono">Teléfono:</label><br>
        <input type="tel" name="telefono" id="telefono" pattern="[0-9]{10}" required>
    </p>
    <p>
        <label for="edad">Edad:</label><br>
        <input type="number" name="edad" id="edad" min="1" max="120" required>
    </p>
    <p>
        <label for="mensaje">Mensaje:</label><br>
        <textarea name="mensaje" id="mensaje" rows="5" required></textarea>
    </p>
    <p>
        <input type="submit" name="enviar" value="Enviar">
    </p>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar y validar los campos del formulario
    $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefono = preg_replace('/[^0-9]/', '', $_POST['telefono']); // Elimina caracteres no numéricos
    $edad = filter_var($_POST['edad'], FILTER_VALIDATE_INT);
    $mensaje = htmlspecialchars($_POST['mensaje'], ENT_QUOTES, 'UTF-8');

    // Verificaciones adicionales
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p><b>Error:</b> El email proporcionado no es válido.</p>";
    } elseif ($edad === false || $edad < 1 || $edad > 120) {
        echo "<p><b>Error:</b> La edad debe estar entre 1 y 120 años.</p>";
    } elseif (strlen($telefono) != 10) {
        echo "<p><b>Error:</b> El número de teléfono debe tener 10 dígitos.</p>";
    } else {
        // Mostrar datos sanitizados y validados
        echo "<h2>Gracias por completar el formulario, $nombre.</h2>";
        echo "<p><b>Email:</b> $email</p>";
        echo "<p><b>Teléfono:</b> $telefono</p>";
        echo "<p><b>Edad:</b> $edad</p>";
        echo "<p><b>Mensaje:</b> $mensaje</p>";
    }
}
?>
</body>
</html>
