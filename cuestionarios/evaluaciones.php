<?
$cv=$_POST['cv'];
$repo=$_POST['repo'];
$linkedin=$_POST['linkedin'];
$cuv=$_POST['cuv'];
//base de datos
$conexion=mysqli_connect("localhost:3310","root","","pasantes alpha db");
$sql = "INSERT INTO  evaluaciones values(id,'$cv','$repo','$linkedin','$cuv')";
 $ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion));

 if (!$ejecutar){
    echo  "Hay un error";
}
else {
    echo "Datos guardados";
}



?>