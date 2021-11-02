<?php
$id=$_GET['id'];

//base de datos
$conexion=mysqli_connect("localhost:3310","root","","pasantes alpha db");
//eliminar datos del formulario
$sql="DELETE FROM formulario WHERE id LIKE $id";
$ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion));
if ($ejecutar){

  
header("location:pasantes activos.php");

}
else {
  
   echo  "Hay un error";
}

?>