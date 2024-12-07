<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
</head>
<body>
    <h1>Introduce los datos</h1>
    <form action="encuesta.php" method="POST">
    Introduce tu nombre: <input type="text" name="nombre"><br><br>
    Selecciona tu sexo: <br>
    <input type="radio" id="masculino" name="sexos" value="masculino">
    <label for="masculino">Hombre</label><br>
    <input type="radio" id="femenino" name="sexos" value="femenino">
    <label for="femenino">Mujer</label><br><br>
    Selecciona tus actividades favoritas: <br>
    <input type="checkbox" id="musica" name="actividades[]" value="musica">
    <label for="vehicle1"> Escuchar música</label><br>
    <input type="checkbox" id="entrenar" name="actividades[]" value="entrenar">
    <label for="vehicle2"> Entrenar</label><br>
    <input type="checkbox" id="ajedrez" name="actividades[]" value="ajedrez">
    <label for="vehicle3"> Jugar al ajedrez</label><br><br>
    <input type="submit" value="Submit"><br>
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valornombre = isset($_POST["nombre"]) ? htmlspecialchars(trim($_POST["nombre"])) : "";
    $valorsexo = isset($_POST["sexos"]) ? htmlspecialchars($_POST["sexos"]) : "";
    if (empty($valornombre) || empty($valorsexo)) {
        echo "Por favor, introduce valores en todos los apartados.";
    } else {
        echo "Tu nombre es: $valornombre y tu sexo es $valorsexo. <br>";
        echo "Te interesa lo siguiente:";
            if (isset($_POST['actividades']) && is_array($_POST['actividades'])){
            echo "<ul>";
            foreach ($_POST['actividades'] as $actividad) {
                echo "<li>" . htmlspecialchars($actividad) . "</li>";
            }
            echo "</ul>";
        }
    }       
}
?>


</body>
</html>