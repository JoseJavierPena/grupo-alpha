<?php

$nombre=$_POST['nombre'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['nombre']=$nombre;

$conexion=mysqli_connect("localhost:8111","root","","pasantes alpha db");

$consulta="select * from  login where nombre ='$nombre' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:../admin/pasantes activos.html");

}else
if($filas['id_cargo']==2){ //pasantes
header("location:../pasantes/pasantes.html");
}
else{
    ?>
    <?php
    include("");
    ?>
    <h1 class="bad" style="text-align: center;">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado); 
mysqli_close($conexion);
