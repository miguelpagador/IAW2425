<!DOCTYPE html>
<html>
<head>
    <title>Enviar Correo</title>
</head>
<body>

<h2>Enviar Correo</h2>
<form action="enviar_correo.php" method="GET">
    Asunto: <input type="text" name="asunto"><br>
    Destinatario: <input type="email" name="destinatario"><br>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $asunto = $_GET["asunto"];
    $destinatario = $_GET["destinatario"];

    if (!empty($asunto) && !empty($destinatario)) {
        $mensaje = "Este es un correo electrónico de prueba.";

        if (mail($destinatario, $asunto, $mensaje)) {
            echo "El correo ha sido enviado correctamente a $destinatario con el asunto: $asunto";
        } else {
            echo "Error al enviar el correo.";
        }
    } else {
        echo "Error: Debes proporcionar un asunto y un destinatario.";
    }
}
?>

</body>
</html>