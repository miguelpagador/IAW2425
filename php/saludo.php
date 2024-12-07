<form action="saludo.php">
<input type="text" name="caja" placeholder="Escribe aquí">
<input type="submit" value="Enviar">
</form>
<?php
$valor = $_GET["caja"];
if ($valor != ""){
        echo "Hola " . htmlspecialchars($valor) . "!";
}
?>