<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva habitaciones</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"><br><br>
        <input type="text" name="apellido" id="apellido" placeholder="Escribe tu apellido"><br><br>
        <input type="text" name="email" id="email" placeholder="Escribe tu email"><br><br>
        <input type="text" name="dni" id="dni" placeholder="Escribe tu dni"><br><br>
        <label for="habitaciones">Elige el tipo de habitación: </label>
        <select name="habitacion" id="habitacion">
            <option value="selecciona" >Selecciona</option>
            <option value="simple" >Simple: 30€</option>
            <option value="doble" >Doble: 50€</option>
            <option value="triple" >Triple: 80€</option>
            <option value="suite" >Suite: 100€</option>
        </select><br><br>
        <input type="date" name="fecha" id="fecha"><br><br>
        <input type="text" name="dias" id="dias" placeholder="Número de días que va a alojarse"><br><br>
        <input type="submit" name="submit" id="submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST["nombre"]);
            $apellido = htmlspecialchars($_POST["apellido"]);
            $email = htmlspecialchars($_POST["email"]);
            $dni = htmlspecialchars($_POST["dni"]);
            $dias = htmlspecialchars($_POST["dias"]);
            $submit = htmlspecialchars($_POST["submit"]);
            if ($email != "" && $dni != "" && $nombre != "" && $apellido != "" && $dias != "") {
                if (isset($_POST["habitacion"])) {
                        $opcionElegida = $_POST["habitacion"];
                        $imagen0 = "hab0.png"; 
                        $imagen1 = "hab1.png";
                        $imagen2 = "hab2.png";
                        $imagen3 = "hab3.png";
                        $fechaEntrada = $_POST["fecha"];
                        $diasEstancia = $_POST["dias"];
                        $precio1 = 30;
                        $precio2 = 50;
                        $precio3 = 80;
                        $precio4 = 100;
                        $precioSimple = $precio1 * $diasEstancia;
                        $precioDoble = $precio2 * $diasEstancia;
                        $precioTriple = $precio3 * $diasEstancia;
                        $precioSuite = $precio4 * $diasEstancia;
                        switch ($opcionElegida) {
                            case "selecciona":
                                echo "<p>Debes de seleccionar un tipo de habitación</p>";
                                break;
                            case "simple":
                                echo "<br><br><h2>Resumen de la compra:</h2><br><p>Nombre del comprador: $nombre</p>" . "<p>Apellido: $apellido</p>" . "<p>Dni: $dni</p>"
                                 . "<p>Su email es: $email</p>" . "<p>Va a entrar el día: $fechaEntrada</p>" .
                                "<p>Tiene que pagar $precioSimple euros y esta es la imagen de su habitación:</p><br>" . '<img src="' . $imagen0 . '" width="15%" height="10%" alt="foto">';
                                break;
                            case "doble":
                                echo "<br><br><h2>Resumen de la compra:</h2><br><p>Nombre del comprador: $nombre</p>" . "<p>Apellido: $apellido</p>" . "<p>Dni: $dni</p>"
                                . "<p>Su email es: $email</p>" . "<p>Va a entrar el día: $fechaEntrada</p>" .
                               "<p>Tiene que pagar $precioDoble euros y esta es la imagen de su habitación:</p><br>" . '<img src="' . $imagen1 . '" width="15%" height="10%" alt="foto">';                                
                               break;
                            case "triple":
                                echo "<br><br><h2>Resumen de la compra:</h2><br><p>Nombre del comprador: $nombre</p>" . "<p>Apellido: $apellido</p>" . "<p>Dni: $dni</p>"
                                . "<p>Su email es: $email</p>" . "<p>Va a entrar el día: $fechaEntrada</p>" .
                               "<p>Tiene que pagar $precioTriple euros y esta es la imagen de su habitación:</p><br>" . '<img src="' . $imagen2 . '" width="15%" height="10%" alt="foto">';                                
                               break;
                            case "suite":
                                echo "<br><br><h2>Resumen de la compra:</h2><br><p>Nombre del comprador: $nombre</p>" . "<p>Apellido: $apellido</p>" . "<p>Dni: $dni</p>"
                                . "<p>Su email es: $email</p>" . "<p>Va a entrar el día: $fechaEntrada</p>" .
                               "<p>Tiene que pagar $precioSuite euros y esta es la imagen de su habitación:</p><br>" . '<img src="' . $imagen3 . '" width="15%" height="10%" alt="foto">';                                
                               break;
                        }
                    }
            }
            else {
                echo "<p>Todos los campos deben estar llenos</p>";
            }
        }
    ?>
</body>
</html>