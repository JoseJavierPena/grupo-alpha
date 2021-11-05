<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
//base de datos
$conexion=mysqli_connect("localhost:8111","root","","pasantes alpha db");
//actualizacion del formulario
$sql="UPDATE grupo SET nombre='$nombre', apellido='$apellido',correo='$correo'";
$ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion));
if ($ejecutar){

  
header("location:../admin/detalles grupo administracion alpha.php");

}
else {
  
   echo  "Hay un error";
}
?>
