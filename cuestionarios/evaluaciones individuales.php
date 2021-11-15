<?php

$conexion=mysqli_connect("sql204.epizy.com","epiz_30368770","h7iA6zeqMya9","epiz_30368770_pasantesalphadb");

$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];
$Id_formulario= $_POST["Id_formulario"];   

$insertar="INSERT INTO individuales(conociminetoshtml,conociminetoscss,conocimientosjavascript,conocimientosphp,conocmientossqlmysql,otroslenguajes,Id_formulario) VALUES('$question1','$question2','$question3','$question4','$question5','$question6','$Id_formulario')";
$resultado= mysqli_query($conexion,$insertar);

if($resultado){
    echo "<script> alert('Se enviaron los datos');</script>";
    header("location:agradecimientos.html");
    }else{
        print("Errormessage: %s\n". mysqli_error($conexion));
    
    }
