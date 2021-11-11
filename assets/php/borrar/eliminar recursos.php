<?php

include '../ayuda/utilidad recurso.php';

session_start();

$pasantes = $_SESSION['pasantes'];

if(isset($_GET['id'])){

    $estudianteId = $_GET['id'];

    $elementIndex = getIndexElement($pasantes,'id',$estudianteId);

    unset($pasantes[$elementIndex]);

    $_SESSION['pasantes'] = $pasantes;
    
}

header("Location:../../../admin/recursos.php");
exit();

?>