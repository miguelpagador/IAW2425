<?php

$servername = "sql307.thsite.top";
$username = "thsi_35748575";
$password = "uS9rA5MT";
$dbname = "thsi_35748575_bdprueba";


    header("Content-type:text/html;charset=utf-8");
    if (array_key_exists('username',$_POST) OR array_key_exists('password',$_POST))
    {
        $enlace = mysqli_connect($servername, $username, $password, $dbname);
        if (mysqli_connect_error()) {
            die("Hubo un error en la conexión, inténtelo más tarde");
        }
        if ($_POST['username']=='')
        {
            echo "<p>El nombre de usuario es obligatorio</p>";
        }
        else if ($_POST['password']=='')
        {
            echo "<p>La contraseña es obligatoria</p>";
        }
        else
        {
            // El usuario ha rellenado ambos campos
            $query = "SELECT username FROM usuarios WHERE username='".mysqli_real_escape_string($enlace,$_POST['username'])."'";
            $result = mysqli_query($enlace,$query);
            if (mysqli_num_rows($result)>0)
            {
                echo "<p>Ese nombre de usuario ya está registrado. Intenta con otro</p>";
            }
            else
            {
                // Añadir a nuestro usuario a la BD
                $query="INSERT INTO usuarios (username, password) VALUES('".mysqli_real_escape_string($enlace,$_POST['username'])."','".mysqli_real_escape_string($enlace,base64_encode($_POST['password']))."')";
                if (mysqli_query($enlace,$query)){
                    echo "<p>¡Enhorabuena! Has registrado tu cuenta</p>";
                
                }
                else
                {
                    echo "<p>Hubo algún problema al registrar el usuario. Inténtelo más tarde</p>";
                }
            }
        }
    }

?>
<h1>Registro de usuario</h1>
<form method="POST">
    <input type="text" name="username" placeholder="Escribe tu nombre de usuario">
    <input type ="password" name="password">
    <input type="submit" value="Registrar">
</form>