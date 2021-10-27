<?php
$conexion=mysqli_connect("localhost:3310","root","","pasantes alpha db");
$question1="";
$question2="";
$question3="";
$question4="";
$question5="";
$question6="";
if(isset($_POST['question1'])){
    $question1=$_POST['question1'];
}elseif(isset($_POST['question2'])){
    $question2=$_POST['question2'];
}elseif(isset($_POST['question3'])){
    $question3=$_POST['question3'];
}elseif(isset($_POST['question4'])){
    $question4=$_POST['question4'];
}elseif(isset($_POST['question5'])){
    $question5=$_POST['question5'];
}elseif(isset($_POST['question6'])){
    $question6=$_POST['question6'];
}
if(isset($_POST['enviar'])){
$question1 = $_REQUEST['question1'];
$question2 = $_REQUEST['question2'];
$question3 = $_REQUEST['question3'];
$question4 = $_REQUEST['question4'];
$question5 = $_REQUEST['question5'];
$question6 = $_REQUESTr['question6'];


$insertar="INSERT INTO evaluacionesIndividuales(Conocimientos_HTML,Conocimientos_CSS,Conocimientos_JavaScript,Conocimientos_PHP,ConocimientosSQLMySQL,Otroslenguajesprogramacion) values('$question1','$question2','$question3','$question4','$question5','$question6')";
$resultado= mysqli_query($conexion,$insertar);


if($resultado){
    echo "<script> alert('Se enviaron los datos');</script>";
    header("location:evaluaciones individuales.html");
    }else{
        print("Errormessage: %s\n". mysqli_error($conexion));
    
    }
        }
      





?>