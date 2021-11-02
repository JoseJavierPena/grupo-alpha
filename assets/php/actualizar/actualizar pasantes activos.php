<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$universidad=$_POST['universidad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$donde_vives=$_POST['donde_vives'];
$correo=$_POST['correo'];
//base de datos
$conexion=mysqli_connect("localhost:8111","root","","pasantes alpha db");
//actualizacion del formulario
$sql="UPDATE formulario SET nombre='$nombre', apellido='$apellido', cedula='$cedula', universidad='$universidad', telefono='$telefono', direccion='$direccion', donde_vives='$donde_vives', correo='$correo' WHERE id_formulario LIKE $id";
$ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion));
if ($ejecutar){

  
header("location:../../../admin/pasantes activos.php");

}
else {
  
   echo  "Hay un error";
}
?>
