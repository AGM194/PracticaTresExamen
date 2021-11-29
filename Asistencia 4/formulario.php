<?php
  include("conexion.php")
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
      <section class="form">
        <h3>Formulario de Registro</h3>
          <form action="accion.php" method="GET">
            <input class="controles" type="number"name="Matricula" id="matricula" placeholder="Ingrese su Matricula"/>
            <input class="controles" type="text"name="Nombre" id="nombres" placeholder="Ingrese su Nombre Completo"/>
            <input class="controles" type="text"name="Grupo" id="grupo" placeholder="Ingrese su Grupo"/>
            <input class="controles" type="email"name="Correo" id="correo" placeholder="Ingrese su Correo Electronico"/>
            <input class="controles" type="text"name="Comentario" id="comentario" placeholder="Ingrese algun Comentario"/>
            <input class="controles" type="password"name="Contraseña" id="contraseña" placeholder="Ingrese su Contraseña"/>
            <input class="boton" type="submit" name="accion" value="Registrar"/>
          </form>
      </section>
      <div class="col-md-8">
        <table class="table">
          <thead class="table-success table-striped">
            <tr>
              <th>Matricula</th>
              <th>Nombre</th>
              <th>Grupo</th>
              <th>Correo</th> 
              <th>Comentario</th>
              <th>Contraseña</th>
              <th></th>
              <th></th>   
            </tr>    
          </thead>
          <tbody>
            <?php
                $query = "SELECT * FROM datos";
                $result_datoss=mysqli_query($con, $query);

                while($row=mysqli_fetch_array($result_datoss)) { ?>
                <tr>
                <td><?php echo $row['Matricula']?></td> 
                <td><?php echo $row['Nombre']?></td>
                <td><?php echo $row['Grupo']?></td>
                <td><?php echo $row['Correo']?></td>
                <td><?php echo $row['Comentario']?></td>
                <td><?php echo $row['Contraseña']?></td>
                <td><a href="actualizar.php?id=<?php echo $row['id']?>" class="btn btn-info">Modificar</a></td>
                <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a></td>
              
              </tr> 
                <?php } ?> 
          </tbody> 
        </table>   
      </div>  
</body>
</html>  