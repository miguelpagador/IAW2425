<?php
if(!empty($_GET['id'])){
    include "conexion.php";
    
    //Extraer imagen de la BD mediante GET
    $result = $db->query("SELECT imagenes FROM images_tabla WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['imagenes']; 
    }else{
        echo 'Imagen no existe...';
    }
}
?>