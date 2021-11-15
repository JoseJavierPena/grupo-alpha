<?php


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];

//base de datos
$conexion=mysqli_connect("localhost:8111","root","","epiz_30368770_pasantesalphadb");
$sql = "INSERT INTO  grupoc(nombre,apellido,correo) values('$nombre','$apellido','$correo')";
 $ejecutar = mysqli_query ($conexion,$sql);

 if ($ejecutar){

     echo "Datos guardados";
   
header("location:../informacion y creacion/detalles grupo administracion central.php");

}
else {
   
    echo  "Hay un error";
}
