<?php
session_start();
$conexion=mysqli_connect("localhost:8111","root","","pasantes alpha db");
if(isset($_POST['enviar'])){
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];


$query="INSERT INTO evaluacionesindividuales(Conocimientos_HTML,Conocimientos_CSS,Conocimientos_JavaScript,Conocimientos_PHP,ConocimientosSQLMySQL,Otroslenguajesprogramación) values('$question1','$question2','$question3','$question4','$question5','$question6')";
$query_run= mysqli_query($conexion,$query);
if($query_run){
    $_SESSION['status'] = 'datos ingresados correctamente';
    header("location : evaluaciones individuales.html");
}
else{
    $_SESSION['status'] = 'datos ingresados correctamente';
    header("location : evaluaciones individuales.html");
}
}












?>