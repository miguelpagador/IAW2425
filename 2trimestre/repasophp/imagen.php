<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Almacenar imagen en la base de datos MySQL usando PHP</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<style type="text/css">
*{ font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif}
.main{ margin:auto; border:1px solid #7C7A7A; width:60%; text-align:left; padding:30px; background:#85c587}
input[type=submit]{ background:#6ca16e; width:100%;
    padding:5px 15px; 
    background:#ccc; 
    cursor:pointer;
	font-size:16px;
   
}
input[type=text]{  width:40%;
    padding:5px 15px; height:25px;
	font-size:16px;
   
}
.form-control {
	padding: 0px 0px;
}
</style>
</head>
<body bgcolor="#bed7c0">
<bR>
<div class="main">
<h1>Cargar y Almacenar imagen en MySQL PHP</h1>
<div class="card">
  <div class="card-header">
    Seleccione imagen a cargar
  </div>
  <div class="card-body">
      <form name="MiForm" id="MiForm" method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
          <label class="col-sm-2 control-label">Archivos</label>
          <div class="col-md-12">
            <input type="file" class="form-control" id="image" name="image" multiple>
          </div>
          </div>
        <div class="form-group">
          <div class="col-md-12">          
			<button name="submit" class="btn btn-primary">Cargar Imagen</button>
			</div>
        </div>
      </form>

  </div>
</div>


<?php
if(isset($_POST["submit"])){
echo '  <div class="card mt-5">
  <div class="card-header">
    Visualizar Imagen Cargada
  </div>
  <div class="card-body">';
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
       include "conexion.php";
        
        
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into images_tabla (imagenes, creado) VALUES ('$imgContenido', now())");
		// COndicional para verificar la subida del fichero
		$ultimo = mysqli_insert_id($db);
        if($insertar){
            echo "Archivo Subido Correctamente.<br>";
			echo "<img src='vista.php?id=".$ultimo."' alt='Img blob desde MySQL' width='600' />"; 
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
		// Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }

echo '  </div>
</div>';

}
?>

 </div>
 
</body>
</html>