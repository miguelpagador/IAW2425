<?php  include "../header.php" ?>
<?php 
  if(isset($_POST['crear'])) 
    {
        $planta = htmlspecialchars($_POST['planta']);
        $aula = htmlspecialchars($_POST['aula']);
        $descripcion = htmlspecialchars($_POST['descripcion']);
        $comentario = htmlspecialchars($_POST['comentario']);
        $fecha_alta = htmlspecialchars($_POST['fecha_alta']);
        $fecha_rev = htmlspecialchars($_POST['fecha_rev']);
        $fecha_sol = htmlspecialchars($_POST['fecha_sol']);
      
        $query= "INSERT INTO incidencias(planta, aula, descripcion, fecha_alta, fecha_rev, fecha_sol, comentario) VALUES('{$planta}','{$aula}','{$descripcion}','{$fecha_alta}','{$fecha_rev}','{$fecha_sol}','{$comentario}')";
        $resultado = $conn->query($query);
    
          if (!$resultado) {
              echo "Algo ha ido mal añadiendo la incidencia: ";
          }
          else
          {
            echo "<script type='text/javascript'>alert('¡Incidencia añadida con éxito!')</script>";
          }         
    }
?>
<h1 class="text-center">Añadir incidencia</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="planta" class="form-label">Planta</label>
        <input type="text" name="planta"  class="form-control">
      </div>
      <div class="form-group">
        <label for="aula" class="form-label">Aula</label>
        <input type="text" name="aula"  class="form-control">
      </div>
      <div class="form-group">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" name="descripcion"  class="form-control">
      </div>
      <div class="form-group">
        <label for="fecha_alta" class="form-label">Fecha Alta</label>
        <input type="date" name="fecha_alta"  class="form-control">
      </div>
      <div class="form-group">
        <label for="fecha_rev" class="form-label">Fecha Revisión</label>
        <input type="date" name="fecha_rev"  class="form-control">
      </div>
      <div class="form-group">
        <label for="fecha_sol" class="form-label">Fecha Solución</label>
        <input type="date" name="fecha_sol"  class="form-control">
      </div>
      <div class="form-group">
        <label for="comentario" class="form-label">Comentario</label>
        <input type="text" name="comentario"  class="form-control">
      </div>
      <div class="form-group">
        <input type="submit"  name="crear" class="btn btn-primary mt-2" value="Añadir">
      </div>
    </form> 
  </div>
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Volver </a>
  <div>
<?php include "../footer.php" ?>