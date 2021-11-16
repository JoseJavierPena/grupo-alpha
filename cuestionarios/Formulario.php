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
$conexion = mysqli_connect("sql311.epizy.com", "epiz_30380597", "vrWDL7tBbrIJUBa", "epiz_30380597_grupoAlpha");
$sql = "INSERT INTO  formulario values(Id_formulario,'$nombre','$apellido','$cedula','$universidad','$telefono',
'$direccion','$donde_vives','$correo')";
 $ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion));

 if ($ejecutar){

     echo "Datos guardados";
   
header("location:evaluaciones diseño.php");

}
else {
   
    echo  "Hay un error";
}
