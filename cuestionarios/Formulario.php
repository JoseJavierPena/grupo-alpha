<?php


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$universidad=$_POST['universidad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$donde_vives=$_POST['donde_vives'];
$correo=$_POST['correo'];
//base de datos
$conexion=mysqli_connect("localhost:3310","root","","pasantes alpha db");
$sql = "INSERT INTO  formulario values(id,'$nombre','$apellido','$cedula','$universidad','$telefono',
'$direccion','$donde_vives','$correo')";
 $ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion));

 if (!$ejecutar){
    echo  "Hay un error";
}
else {
    echo "Datos guardados";
}


 
  
  
 

?>
