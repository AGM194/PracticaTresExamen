<?php
  include("conexion.php");
  
  if (isset($_GET['accion'])){
    $Matricula=$_GET['Matricula'];  
    $Nombre=$_GET['Nombre']; 
    $Grupo=$_GET['Grupo']; 
    $Correo=$_GET['Correo']; 
    $Comentario=$_GET['Comentario']; 
    $Contraseña=$_GET['Contraseña']; 
  
    $sql="INSERT INTO datos(Matricula, Nombre, Grupo, Correo, Comentario, Contraseña) VALUES('$Matricula','$Nombre','$Grupo','$Correo','$Comentario','$Contraseña')";
    $query= mysqli_query($con,$sql);
  
    if(!$query){
        die("Query Failed");
    }
    Header("Location: formulario.php");
}

  
?>