<?php


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];

//base de datos
$conexion=mysqli_connect("localhost:8111","root","","pasantes alpha db");
$sql = "INSERT INTO  grupof(nombre,apellido,correo) values('$nombre','$apellido','$correo')";
 $ejecutar = mysqli_query ($conexion,$sql);

 if ($ejecutar){

     echo "Datos guardados";
   
header("location:../informacion y creacion/detalles grupo administracion falcon.php");

}
else {
   
    echo  "Hay un error";
}
