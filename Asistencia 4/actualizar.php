 <?php
  include("conexion.php");

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM datos WHERE id = $id";
    $result= mysqli_query($con, $query);
    if (mysqli_num_rows($result) ==1) {
        $row = mysqli_fetch_array($result);
        $Matricula = $row['Matricula'];
        $Nombre = $row['Nombre'];
        $Grupo = $row['Grupo'];
        $Correo = $row['Correo'];
        $Comentario = $row['Comentario'];
        $Contraseña = $row['Contraseña'];
    }

    }
    if (isset($_POST['Actualizar'])){
        $id =$_GET['id'];
        $Matricula=$_POST['Matricula'];
        $Nombre=$_POST['Nombre'];
        $Grupo=$_POST['Grupo'];
        $Correo=$_POST['Correo'];
        $Comentario=$_POST['Comentario'];
        $Contraseña=$_POST['Contraseña'];

        $query = "UPDATE datos set Matricula='$Matricula', Nombre='$Nombre', Grupo='$Grupo', Correo='$Correo', 
        Comentario='$Comentario', Contraseña='$Contraseña' WHERE id= $id";
        mysqli_query($con, $query);
        header("Location: formulario.php");
    }
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
      <div class="container p-4">
          <div class="row">
              <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                    <form action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="form-group">
                          <input type="number"name="Matricula" id="matricula" value="<?php echo $Matricula?>" class="form-control" placeholder="Actualice su Matricula"/>
                          <input type="text"name="Nombre" id="nombres" value="<?php echo $Nombre?>" class="form-control" placeholder="Ingrese su Nombre Completo"/>
                          <input type="text"name="Grupo" id="grupo" value="<?php echo $Grupo?>" class="form-control" placeholder="Ingrese su Grupo"/>
                          <input type="email"name="Correo" id="correo" value="<?php echo $Correo?>" class="form-control" placeholder="Ingrese su Correo Electronico"/>
                          <input type="text"name="Comentario" id="comentario" value="<?php echo $Comentario?>" class="form-control" placeholder="Ingrese algun Comentario"/>
                          <input type="password"name="Contraseña" id="contraseña" value="<?php echo $Contraseña?>" class="form-control" placeholder="Ingrese su Contraseña"/>
                        </div>
                            <button class="btn btn-success" name="Actualizar">
                                Actualizar
                            </button>
                        
                    </form>
                    </div>
              </div> 
          </div>       
      </div>    
  </body>    
</html>