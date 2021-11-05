<?php 
$id=$_GET['id']; 
 
//base de datos 
$conexion=mysqli_connect("localhost:8111","root","","pasantes alpha db"); 
//eliminar datos del formulario 
$sql="DELETE FROM grupof WHERE id LIKE $id"; 
$ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion)); 
if ($ejecutar){ 
 
   
header("location:../informacion y creacion/detalles grupo administracion falcon.php"); 
 
} 
else { 
   
   echo  "Hay un error"; 
} 
 
?>