<?php 
$id=$_GET['id']; 
 
//base de datos 
$conexion = mysqli_connect("sql311.epizy.com", "epiz_30380597", "vrWDL7tBbrIJUBa", "epiz_30380597_grupoAlpha");
//eliminar datos del formulario 
$sql="DELETE FROM grupoe WHERE id LIKE $id"; 
$ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion)); 
if ($ejecutar){ 
 
   
header("location:../informacion y creacion/detalles grupo administRacion elecon.php"); 
 
} 
else { 
   
   echo  "Hay un error"; 
}
