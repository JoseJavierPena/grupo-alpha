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
    echo'<script type="text/javascript">
    alert("Ha iniciado seccion en el sitio de administracion");
    window.location.href="../admin/pasantes activos.php"
    </script>';
    
   

}else if($filas['id_cargo']==2){ //pasantes
    echo'<script type="text/javascript">
    alert("Ha iniciado seccion en el citio de pasantes");
    window.location.href="../pasantes/pasantes.html"
    </script>';

}
else{

     header("location:../logins/login.html");

}

mysqli_free_result($resultado); 
mysqli_close($conexion);
