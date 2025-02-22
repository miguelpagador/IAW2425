<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Autenticación</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
    <label for="usuario">Usuario:</label><input type="text" name="usuario"><br>
    <label for="contrasena">Contraseña</label><input type="password" name="contrasena"><br>
    <input type="submit" value="Login">
</form>

<?php

$servername = "sql307.thsite.top";
$username = "thsi_35748575";
$password = "uS9rA5MT";
$dbname = "thsi_35748575_bdprueba";

    if ($_POST){
        $usuario = htmlspecialchars($_POST["usuario"]);
        $contrasena = htmlspecialchars($_POST["contrasena"]);
        // Intentamos la conexión con MySQL
        $enlace =  mysqli_connect($servername, $username, $password, $dbname);
            
        if ($enlace){
            //$query = "SELECT * FROM usuarios WHERE username='".$_POST['usuario']."' AND password='".$_POST['contrasena']."'";
            $query = "SELECT * FROM usuarios WHERE username='".mysqli_real_escape_string($enlace,$usuario)."' AND password='".mysqli_real_escape_string($enlace,$contrasena)."'";
            $result = mysqli_query($enlace,$query);
            if (mysqli_num_rows($result)>0)
            {
                echo "<p>Bienvenido " . $usuario . "</p>";
            }
            else {
                echo "<p>Acceso denegado</p>";
            }
        }
        else{
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        }       
}
?>
</body>

</html>