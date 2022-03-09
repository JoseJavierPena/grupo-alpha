<?php

session_start();

include'../conexion db/db.php';

$usuario = $_SESSION['nombre'];
if(!isset($usuario)){

    header("location:../logins/login.html");

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style grupos administrador.css" media="screen">
    
    <title>Grupos</title>

    <style type="text/css">
                  #alpha,#vergrupoA,#creargrupoA,#salirgrupoA,#cerrargrupoA,
                  #beta,#vergrupoB,#creargrupoB,#salirgrupoB,#cerrargrupoB,
                  #central,#vergrupoC,#creargrupoC,#salirgrupoC,#cerrargrupoC,
                  #delta,#vergrupoD,#creargrupoD,#salirgrupoD,#cerrargrupoD,
                  #elecon,#vergrupoE,#creargrupoE,#salirgrupoE,#cerrargrupoE,
                  #falcon,#vergrupoF,#creargrupoF,#salirgrupoF,#cerrargrupoF,
                  #general,#vergrupoG,#creargrupoG,#salirgrupoG,#cerrargrupoG,
                  #hicaro,#vergrupoH,#creargrupoH,#salirgrupoH,#cerrargrupoH,
                  #incognito,#vergrupoI,#creargrupoI,#salirgrupoI,#cerrargrupoI,
                  #junto,#vergrupoJ,#creargrupoJ,#salirgrupoJ,#cerrargrupoJ,
                  #kilometro,#vergrupoK,#creargrupoK,#salirgrupoK,#cerrargrupoK,
                  #logro,#vergrupoL,#creargrupoL,#salirgrupoL,#cerrargrupoL{
    display:none;
}
            </style>
    <link rel="icon" href="../assets/img/social-icon.ico">

</head>
<body>

    <nav class="navbar navbar-dark bg-dark  fixed-top ">
        <div class="container">
            <a href="#" class="navbar-brand">
                <strong>AILogic</strong>
            </a>

            <button type="button" class="navbar-toggler d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar menú de navegación">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  d-md-none" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link " href="pasantes activos.php"> Pasantes activos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="informacion de evaluaciones pasantes.php"> Información de evaluaciones pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="seguimiento de recursos.php"> Seguimiento de recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="recursos.html"> Recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="asignaciones administrador.php"> Asignaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="grupos administrador.php"> Grupos </a> </li>
                <li class="nav-item"> <a class="nav-link " href="../pasantes/pasantes.php"> Pasantes </a> </li>
                <li class="nav-item"> <a class="nav-link " href="chat/chatpage.php">Chat</a> </li>
                <li class="nav-item"> <a class="nav-link " href="enviar correo.php"> Enviar correo </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../logins/cerrar.php"> Cerrar sesión </a> </li>
                </ul>
            </div>
        </div> 
    </nav>


    <div class="container-fluid mt-5">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="pasantes activos.php">
                                <span data-feather="home">Pasantes activos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="informacion de evaluaciones pasantes.php">
                                <span data-feather="file"></span>Información de evaluaciones pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="seguimiento de recursos.php">
                                <span data-feather="bar-chart-2"></span> Seguimiento de recursos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recursos.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="asignaciones administrador.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="grupos administrador.php">
                            <span data-feather="layers"></span>Grupos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../pasantes/pasantes.php">
                            <span data-feather="layers"></span>Pasantes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chat/chatpage.php">
                            <span data-feather="layers"></span>Chat
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="enviar correo.php">
                            <span data-feather="layers"></span>Enviar correo
                        </a>
                    </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../logins/cerrar.php">
                                <span data-feather="layers"></span>Cerrar sesión
                            </a>
                        </li>


                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Grupos</h1>
                </div>

            
                <a onclick="ver();"  class="btn btn-edit"><img src="../assets/img/a.jpg" style="width: 30px;"></a>

                <a onclick="cerrar();"  class="btn btn-edit"><img src="../assets/img/arriba.png" style="width: 30px;"></a>

                <div class="">
<ul>

 <div id="vergrupoA" class="">

<li>
 <a class="btn btn-edit" onclick="vergrupoa();">ALPHA</a>
 </li>
 
 
<div id="creargrupoA">
<a class="btn btn-edit" onclick="creargrupoa();">Agregar grupo ALPHA</a>
</div>

<div id="salirgrupoA">
    <a class="btn btn-edit" onclick="salirgrupoa();">Cerrar grupo ALPHA</a>
</div>

<div id="cerrargrupoA">
 <a class="btn btn-edit" onclick="cerrargrupoa();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
 </div>
 
</div>


<div id="vergrupoB">

<li>
<a class="btn btn-edit" onclick="vergrupob();">BETA</a>
</li>

<div id="creargrupoB">
<a class="btn btn-edit" onclick="creargrupob();">Agregar grupo BETA</a>
</div>

<div id="salirgrupoB">
   <a class="btn btn-edit" onclick="salirgrupob();">Cerrar grupo BETA</a>
</div>

<div id="cerrargrupoB">
<a class="btn btn-edit" onclick="cerrargrupob();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
</div>
</div>


<div id="vergrupoC">

<li>
<a class="btn btn-edit" onclick="vergrupoc();">CENTRAL</a>
</li>

<div id="creargrupoC">
<a class="btn btn-edit" onclick="creargrupoc();">Agregar grupo CENTRAL</a>
</div>

<div id="salirgrupoC">
   <a class="btn btn-edit" onclick="salirgrupoc();">Cerrar grupo CENTRAL</a>
</div>

<div id="cerrargrupoC">
<a class="btn btn-edit" onclick="cerrargrupoc();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
</div>
</div>



<div id="vergrupoD">

<li>
<a class="btn btn-edit" onclick="vergrupod();">DELTA</a>
</li>

<div id="creargrupoD">
<a class="btn btn-edit" onclick="creargrupod();">Agregar grupo DELTA</a>
</div>

<div id="salirgrupoD">
   <a class="btn btn-edit" onclick="salirgrupod();">Cerrar grupo DELTA</a>
</div>

<div id="cerrargrupoD">
<a class="btn btn-edit" onclick="cerrargrupod();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
</div>
</div>


<div id="vergrupoE">

<li>
<a class="btn btn-edit" onclick="vergrupoe();">ELECON</a>
</li>

<div id="creargrupoE">
<a class="btn btn-edit" onclick="creargrupoe();">Agregar grupo ELECON</a>
</div>

<div id="salirgrupoE">
   <a class="btn btn-edit" onclick="salirgrupoe();">Cerrar grupo ELECON</a>
</div>

<div id="cerrargrupoE">
<a class="btn btn-edit" onclick="cerrargrupoe();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
</div>
</div>



<div id="vergrupoF">

<li>
<a class="btn btn-edit" onclick="vergrupof();">FALCON</a>
</li>

<div id="creargrupoF">
<a class="btn btn-edit" onclick="creargrupof();">Agregar grupo FALCON</a>
</div>

<div id="salirgrupoF">
   <a class="btn btn-edit" onclick="salirgrupof();">Cerrar grupo FALCON</a>
</div>

<div id="cerrargrupoF">
<a class="btn btn-edit" onclick="cerrargrupof();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
</div>
</div>




<div id="vergrupoG">

<li>
<a class="btn btn-edit" onclick="vergrupog();">GENERAL</a>
</li>

<div id="creargrupoG">
<a class="btn btn-edit" onclick="creargrupog();">Agregar grupo GENERAL</a>
</div>

<div id="salirgrupoG">
   <a class="btn btn-edit" onclick="salirgrupog();">Cerrar grupo GENERAL</a>
</div>

<div id="cerrargrupoG">
<a class="btn btn-edit" onclick="cerrargrupog();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
</div>
</div>


<div id="vergrupoH">


<li>
<a class="btn btn-edit" onclick="vergrupoh();">HICARO</a>
</li>

<div id="creargrupoH">
<a class="btn btn-edit" onclick="creargrupoh();">Agregar grupo HICARO</a>
</div>

<div id="salirgrupoH">
   <a class="btn btn-edit" onclick="salirgrupoh();">Cerrar grupo HICARO</a>
</div>

<div id="cerrargrupoH">
<a class="btn btn-edit" onclick="cerrargrupoh();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
</div>
</div>


<div id="vergrupoI">


<li>
<a class="btn btn-edit" onclick="vergrupoi();">INCOGNITO</a>
</li>

<div id="creargrupoI">
<a class="btn btn-edit" onclick="creargrupoi();">Agregar grupo INCOGNITO</a>
</div>

<div id="salirgrupoI">
   <a class="btn btn-edit" onclick="salirgrupoi();">Cerrar grupo INCOGNITO</a>
</div>

<div id="cerrargrupoI">
<a class="btn btn-edit" onclick="cerrargrupoi();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
</div>
</div>


<div id="vergrupoJ">

<li>
<a class="btn btn-edit" onclick="vergrupoj();">JUNTO</a>
</li>

<div id="creargrupoJ">
<a class="btn btn-edit" onclick="creargrupoj();">Agregar grupo JUNTO</a>
</div>

<div id="salirgrupoJ">
   <a class="btn btn-edit" onclick="salirgrupoj();">Cerrar grupo JUNTO</a>
</div>

<div id="cerrargrupoJ">
<a class="btn btn-edit" onclick="cerrargrupoj();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
</div>
</div>


<div id="vergrupoK">

<li>
<a class="btn btn-edit" onclick="vergrupok();">KILOMETRO</a>
</li>

<div id="creargrupoK">
<a class="btn btn-edit" onclick="creargrupok();">Agregar grupo KILOMETRO</a>
</div>

<div id="salirgrupoK">
   <a class="btn btn-edit" onclick="salirgrupok();">Cerrar grupo KILOMETRO</a>
</div>

<div id="cerrargrupoK">
<a class="btn btn-edit" onclick="cerrargrupok();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
</div>
</div>




<div id="vergrupoL">

<li>
<a class="btn btn-edit" onclick="vergrupol();">LOGRO</a>
</li>

<div id="creargrupoL">
<a class="btn btn-edit" onclick="creargrupol();">Agregar grupo LOGRO</a>
</div>

<div id="salirgrupoL">
   <a class="btn btn-edit" onclick="salirgrupol();">Cerrar grupo LOGRO</a>
</div>

<div id="cerrargrupoL">
<a class="btn btn-edit" onclick="cerrargrupol();"><img src="../assets/img/arriba.png" style="width: 30px;"></a>
</div>
</div>


</ul>
</div>

                <hr class="my-4" style="background-color: blue;">


                <div class="container px-4 py-5" id="custom-cards">
                    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                        
                    <div class="col mb-3" id="alpha">
                            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo ALPHA</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                            <small><a href="../assets/php/informacion y creacion/detalles grupo administracion alpha.php">Información del grupo</a></small>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-3" id="beta">
                            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo BETA</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                            <small><a href="../assets/php/informacion y creacion/detalles grupo administracion beta.php">Información del grupo</a></small>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-3" id="central">
                            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo CENTRAL</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                            <small><a href="../assets/php/informacion y creacion/detalles grupo administracion central.php">Información del grupo</a></small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 <hr class="my-4" style="background-color: blue;">

                 <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

                    <div class="col mb-3"id="delta">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo DELTA</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                        <small><a href="../assets/php/informacion y creacion/detalles grupo administracion delta.php">Información del grupo</a></small>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-3" id="elecon">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo ELECON</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                        <small><a href="../assets/php/informacion y creacion/detalles grupo administracion elecon.php">Información del grupo</a></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-3" id="falcon">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo FALCON</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                        <small><a href="../assets/php/informacion y creacion/detalles grupo administracion FALCON.php">Información del grupo</a></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                  

                    
                    <div class="col mb-3" id="general">
                            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo GENERAL</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                            <small><a href="../assets/php/informacion y creacion/detalles grupo administracion general.php">Información del grupo</a></small>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-3" id="hicaro">
                            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo HICARO</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                            <small><a href="../assets/php/informacion y creacion/detalles grupo administracion hicaro.php">Información del grupo</a></small>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-3" id="incognito">
                            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo INCOGNITO</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                            <small><a href="../assets/php/informacion y creacion/detalles grupo administracion incognito.php">Información del grupo</a></small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>

                 <hr class="my-4" style="background-color: blue;">
                 <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    <div class="col mb-3" id="junto">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo JUNTO</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                        <small><a href="../assets/php/informacion y creacion/detalles grupo administracion junto.php">Información del grupo</a></small>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-3" id="kilometro">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo KILOMETRO</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                        <small><a href="../assets/php/informacion y creacion/detalles grupo administracion kilometro.php">Información del grupo</a></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-3" id="logro">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo LOGRO</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                        <small><a href="../assets/php/informacion y creacion/detalles grupo administracion logro.php">Información del grupo</a></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </main>
        </div>
    </div>

    <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

 <script type="text/javascript">
    


 
    window.onload = function() {
        if(+localStorage.getItem('vergrupoa')==1){ creargrupoa()}
        if(+localStorage.getItem('vergrupob')==1){ creargrupob()}
        if(+localStorage.getItem('vergrupoc')==1){ creargrupoc()}
        if(+localStorage.getItem('vergrupod')==1){ creargrupod()}
        if(+localStorage.getItem('vergrupoe')==1){ creargrupoe()}
        if(+localStorage.getItem('vergrupof')==1){ creargrupof()}  
        if(+localStorage.getItem('vergrupog')==1){ creargrupog()}
        if(+localStorage.getItem('vergrupoh')==1){ creargrupoh()}
        if(+localStorage.getItem('vergrupoi')==1){ creargrupoi()}
        if(+localStorage.getItem('vergrupoj')==1){ creargrupoj()}
        if(+localStorage.getItem('vergrupok')==1){ creargrupok()}
        if(+localStorage.getItem('vergrupol')==1){ creargrupol()}

};

     function ver(){
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
         document.getElementById('vergrupoL').style.display='block';
     }

     function cerrar(){

         document.getElementById('vergrupoA').style.display='none';
         document.getElementById('vergrupoB').style.display='none';
         document.getElementById('vergrupoC').style.display='none';
         document.getElementById('vergrupoD').style.display='none';
         document.getElementById('vergrupoE').style.display='none';
         document.getElementById('vergrupoF').style.display='none';
         document.getElementById('vergrupoG').style.display='none';
         document.getElementById('vergrupoH').style.display='none';
         document.getElementById('vergrupoI').style.display='none';
         document.getElementById('vergrupoJ').style.display='none';
         document.getElementById('vergrupoK').style.display='none';
         document.getElementById('vergrupoL').style.display='none';

     }

     function vergrupoa(){
         
            document.getElementById('creargrupoA').style.display='block';
            document.getElementById('salirgrupoA').style.display='block';
            document.getElementById('cerrargrupoA').style.display='block';
            document.getElementById('vergrupoB').style.display='none';
            document.getElementById('vergrupoC').style.display='none';
            document.getElementById('vergrupoD').style.display='none';
            document.getElementById('vergrupoE').style.display='none';
            document.getElementById('vergrupoF').style.display='none';
            document.getElementById('vergrupoG').style.display='none';
            document.getElementById('vergrupoH').style.display='none';
            document.getElementById('vergrupoI').style.display='none';
            document.getElementById('vergrupoJ').style.display='none';
            document.getElementById('vergrupoK').style.display='none';
            document.getElementById('vergrupoL').style.display='none';

          

      }

     function cerrargrupoa(){
      
         document.getElementById('creargrupoA').style.display='none';
         document.getElementById('salirgrupoA').style.display='none';
         document.getElementById('cerrargrupoA').style.display='none';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
         document.getElementById('vergrupoL').style.display='block';

   }


     function creargrupoa(){
        localStorage.setItem('vergrupoa','1')
         document.getElementById('alpha').style.display='block';
     }

     function salirgrupoa(){
        localStorage.removeItem('vergrupoa')
         document.getElementById('alpha').style.display='none';
     }



     function vergrupob(){
     
            document.getElementById('creargrupoB').style.display='block';
            document.getElementById('salirgrupoB').style.display='block';
            document.getElementById('cerrargrupoB').style.display='block';
            document.getElementById('vergrupoA').style.display='none';
            document.getElementById('vergrupoC').style.display='none';
            document.getElementById('vergrupoD').style.display='none';
            document.getElementById('vergrupoE').style.display='none';
            document.getElementById('vergrupoF').style.display='none';
            document.getElementById('vergrupoG').style.display='none';
            document.getElementById('vergrupoH').style.display='none';
            document.getElementById('vergrupoI').style.display='none';
            document.getElementById('vergrupoJ').style.display='none';
            document.getElementById('vergrupoK').style.display='none';
            document.getElementById('vergrupoL').style.display='none';
           

      }

     function cerrargrupob(){
         
         document.getElementById('creargrupoB').style.display='none';
         document.getElementById('salirgrupoB').style.display='none';
         document.getElementById('cerrargrupoB').style.display='none';
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
         document.getElementById('vergrupoL').style.display='block';
         

   }


     function creargrupob(){
        localStorage.setItem('vergrupob','1')
         document.getElementById('beta').style.display='block';
     }

     function salirgrupob(){
        localStorage.removeItem('vergrupob')
         document.getElementById('beta').style.display='none';
     }


     function vergrupoc(){
            document.getElementById('creargrupoC').style.display='block';
            document.getElementById('salirgrupoC').style.display='block';
            document.getElementById('cerrargrupoC').style.display='block';
            document.getElementById('vergrupoA').style.display='none';
         document.getElementById('vergrupoB').style.display='none';
         document.getElementById('vergrupoD').style.display='none';
         document.getElementById('vergrupoE').style.display='none';
         document.getElementById('vergrupoF').style.display='none';
         document.getElementById('vergrupoG').style.display='none';
         document.getElementById('vergrupoH').style.display='none';
         document.getElementById('vergrupoI').style.display='none';
         document.getElementById('vergrupoJ').style.display='none';
         document.getElementById('vergrupoK').style.display='none';
         document.getElementById('vergrupoL').style.display='none';
          

      }

     function cerrargrupoc(){
         document.getElementById('creargrupoC').style.display='none';
         document.getElementById('salirgrupoC').style.display='none';
         document.getElementById('cerrargrupoC').style.display='none';
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
         document.getElementById('vergrupoL').style.display='block';

   }


     function creargrupoc(){
        localStorage.setItem('vergrupoc','1')
         document.getElementById('central').style.display='block';
     }

     function salirgrupoc(){
        localStorage.removeItem('vergrupoc')
         document.getElementById('central').style.display='none';
     }



     function vergrupod(){
            document.getElementById('creargrupoD').style.display='block';
            document.getElementById('salirgrupoD').style.display='block';
            document.getElementById('cerrargrupoD').style.display='block';
            document.getElementById('vergrupoA').style.display='none';
            document.getElementById('vergrupoB').style.display='none';
            document.getElementById('vergrupoC').style.display='none';
            document.getElementById('vergrupoE').style.display='none';
            document.getElementById('vergrupoF').style.display='none';
            document.getElementById('vergrupoG').style.display='none';
            document.getElementById('vergrupoH').style.display='none';
            document.getElementById('vergrupoI').style.display='none';
            document.getElementById('vergrupoJ').style.display='none';
            document.getElementById('vergrupoK').style.display='none';
            document.getElementById('vergrupoL').style.display='none';
          

      }

     function cerrargrupod(){
         document.getElementById('creargrupoD').style.display='none';
         document.getElementById('salirgrupoD').style.display='none';
         document.getElementById('cerrargrupoD').style.display='none';
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
         document.getElementById('vergrupoL').style.display='block';

   }


     function creargrupod(){
        localStorage.setItem('vergrupod','1')
         document.getElementById('delta').style.display='block';
     }

     function salirgrupod(){
        localStorage.removeItem('vergrupod')
         document.getElementById('delta').style.display='none';
     }



     function vergrupoe(){
            document.getElementById('creargrupoE').style.display='block';
            document.getElementById('salirgrupoE').style.display='block';
            document.getElementById('cerrargrupoE').style.display='block';
            document.getElementById('vergrupoA').style.display='none';
         document.getElementById('vergrupoB').style.display='none';
         document.getElementById('vergrupoC').style.display='none';
         document.getElementById('vergrupoD').style.display='none';
         document.getElementById('vergrupoF').style.display='none';
         document.getElementById('vergrupoG').style.display='none';
         document.getElementById('vergrupoH').style.display='none';
         document.getElementById('vergrupoI').style.display='none';
         document.getElementById('vergrupoJ').style.display='none';
         document.getElementById('vergrupoK').style.display='none';
         document.getElementById('vergrupoL').style.display='none';
          

      }

     function cerrargrupoe(){
         document.getElementById('creargrupoE').style.display='none';
         document.getElementById('salirgrupoE').style.display='none';
         document.getElementById('cerrargrupoE').style.display='none';
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
         document.getElementById('vergrupoL').style.display='block';

   }


     function creargrupoe(){
        localStorage.setItem('vergrupoe','1')
         document.getElementById('elecon').style.display='block';
     }

     function salirgrupoe(){
       
        localStorage.removeItem('vergrupoe')
         document.getElementById('elecon').style.display='none';
     }


     function vergrupof(){
            document.getElementById('creargrupoF').style.display='block';
            document.getElementById('salirgrupoF').style.display='block';
            document.getElementById('cerrargrupoF').style.display='block';
            document.getElementById('vergrupoA').style.display='none';
         document.getElementById('vergrupoB').style.display='none';
         document.getElementById('vergrupoC').style.display='none';
         document.getElementById('vergrupoD').style.display='none';
         document.getElementById('vergrupoE').style.display='none';
         document.getElementById('vergrupoG').style.display='none';
         document.getElementById('vergrupoH').style.display='none';
         document.getElementById('vergrupoI').style.display='none';
         document.getElementById('vergrupoJ').style.display='none';
         document.getElementById('vergrupoK').style.display='none';
         document.getElementById('vergrupoL').style.display='none';
          

      }

     function cerrargrupof(){
         document.getElementById('creargrupoF').style.display='none';
         document.getElementById('salirgrupoF').style.display='none';
         document.getElementById('cerrargrupoF').style.display='none';
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
         document.getElementById('vergrupoL').style.display='block';

   }


     function creargrupof(){
        localStorage.setItem('vergrupof','1')
         document.getElementById('falcon').style.display='block';
     }

     function salirgrupof(){
        localStorage.removeItem('vergrupof')
         document.getElementById('falcon').style.display='none';
     }



     function vergrupog(){
            document.getElementById('creargrupoG').style.display='block';
            document.getElementById('salirgrupoG').style.display='block';
            document.getElementById('cerrargrupoG').style.display='block';
            document.getElementById('vergrupoA').style.display='none';
         document.getElementById('vergrupoB').style.display='none';
         document.getElementById('vergrupoC').style.display='none';
         document.getElementById('vergrupoD').style.display='none';
         document.getElementById('vergrupoE').style.display='none';
         document.getElementById('vergrupoF').style.display='none';
         document.getElementById('vergrupoH').style.display='none';
         document.getElementById('vergrupoI').style.display='none';
         document.getElementById('vergrupoJ').style.display='none';
         document.getElementById('vergrupoK').style.display='none';
         document.getElementById('vergrupoL').style.display='none';
          

      }

     function cerrargrupog(){
         document.getElementById('creargrupoG').style.display='none';
         document.getElementById('salirgrupoG').style.display='none';
         document.getElementById('cerrargrupoG').style.display='none';
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
         document.getElementById('vergrupoL').style.display='block';

   }


     function creargrupog(){
        localStorage.setItem('vergrupog','1')
         document.getElementById('general').style.display='block';
     }

     function salirgrupog(){
       
        localStorage.removeItem('vergrupog')
         document.getElementById('general').style.display='none';
     }



     function vergrupoh(){
            document.getElementById('creargrupoH').style.display='block';
            document.getElementById('salirgrupoH').style.display='block';
            document.getElementById('cerrargrupoH').style.display='block';
            document.getElementById('vergrupoA').style.display='none';
         document.getElementById('vergrupoB').style.display='none';
         document.getElementById('vergrupoC').style.display='none';
         document.getElementById('vergrupoD').style.display='none';
         document.getElementById('vergrupoE').style.display='none';
         document.getElementById('vergrupoF').style.display='none';
         document.getElementById('vergrupoG').style.display='none';
         document.getElementById('vergrupoI').style.display='none';
         document.getElementById('vergrupoJ').style.display='none';
         document.getElementById('vergrupoK').style.display='none';
         document.getElementById('vergrupoL').style.display='none';
          

      }

     function cerrargrupoh(){
         document.getElementById('creargrupoH').style.display='none';
         document.getElementById('salirgrupoH').style.display='none';
         document.getElementById('cerrargrupoH').style.display='none';
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
         document.getElementById('vergrupoL').style.display='block';

   }


     function creargrupoh(){
        localStorage.setItem('vergrupoh','1')
       
         document.getElementById('hicaro').style.display='block';
     }

     function salirgrupoh(){
        
        localStorage.removeItem('vergrupoh')
         document.getElementById('hicaro').style.display='none';
     }



     function vergrupoi(){
            document.getElementById('creargrupoI').style.display='block';
            document.getElementById('salirgrupoI').style.display='block';
            document.getElementById('cerrargrupoI').style.display='block';
            document.getElementById('vergrupoA').style.display='none';
         document.getElementById('vergrupoB').style.display='none';
         document.getElementById('vergrupoC').style.display='none';
         document.getElementById('vergrupoD').style.display='none';
         document.getElementById('vergrupoE').style.display='none';
         document.getElementById('vergrupoF').style.display='none';
         document.getElementById('vergrupoG').style.display='none';
         document.getElementById('vergrupoH').style.display='none';
         document.getElementById('vergrupoJ').style.display='none';
         document.getElementById('vergrupoK').style.display='none';
         document.getElementById('vergrupoL').style.display='none';
          

      }

     function cerrargrupoi(){
         document.getElementById('creargrupoI').style.display='none';
         document.getElementById('salirgrupoI').style.display='none';
         document.getElementById('cerrargrupoI').style.display='none';
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
         document.getElementById('vergrupoL').style.display='block';

   }


     function creargrupoi(){
        localStorage.setItem('vergrupoi','1')
     
         document.getElementById('incognito').style.display='block';
     }

     function salirgrupoi(){
        localStorage.removeItem('vergrupoi')
         document.getElementById('incognito').style.display='none';
     }



     function vergrupoj(){
            document.getElementById('creargrupoJ').style.display='block';
            document.getElementById('salirgrupoJ').style.display='block';
            document.getElementById('cerrargrupoJ').style.display='block';
            document.getElementById('vergrupoA').style.display='none';
         document.getElementById('vergrupoB').style.display='none';
         document.getElementById('vergrupoC').style.display='none';
         document.getElementById('vergrupoD').style.display='none';
         document.getElementById('vergrupoE').style.display='none';
         document.getElementById('vergrupoF').style.display='none';
         document.getElementById('vergrupoG').style.display='none';
         document.getElementById('vergrupoH').style.display='none';
         document.getElementById('vergrupoI').style.display='none';
         document.getElementById('vergrupoK').style.display='none';
         document.getElementById('vergrupoL').style.display='none';
          

      }

     function cerrargrupoj(){
         document.getElementById('creargrupoJ').style.display='none';
         document.getElementById('salirgrupoJ').style.display='none';
         document.getElementById('cerrargrupoJ').style.display='none';
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
         document.getElementById('vergrupoL').style.display='block';

   }


     function creargrupoj(){
        localStorage.setItem('vergrupoj','1')
       
         document.getElementById('junto').style.display='block';
     }

     function salirgrupoj(){
    
        localStorage.removeItem('vergrupoj')
         document.getElementById('junto').style.display='none';
     }


     
     function vergrupok(){
            document.getElementById('creargrupoK').style.display='block';
            document.getElementById('salirgrupoK').style.display='block';
            document.getElementById('cerrargrupoK').style.display='block';
            document.getElementById('vergrupoA').style.display='none';
         document.getElementById('vergrupoB').style.display='none';
         document.getElementById('vergrupoC').style.display='none';
         document.getElementById('vergrupoD').style.display='none';
         document.getElementById('vergrupoE').style.display='none';
         document.getElementById('vergrupoF').style.display='none';
         document.getElementById('vergrupoG').style.display='none';
         document.getElementById('vergrupoH').style.display='none';
         document.getElementById('vergrupoI').style.display='none';
         document.getElementById('vergrupoJ').style.display='none';
         document.getElementById('vergrupoL').style.display='none';
          

      }

     function cerrargrupok(){
         document.getElementById('creargrupoK').style.display='none';
         document.getElementById('salirgrupoK').style.display='none';
         document.getElementById('cerrargrupoK').style.display='none';
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoL').style.display='block';

   }


     function creargrupok(){
        localStorage.setItem('vergrupok','1')
         document.getElementById('kilometro').style.display='block';
     }

     function salirgrupok(){
      
        localStorage.removeItem('vergrupok')
         document.getElementById('kilometro').style.display='none';
     }


     
     function vergrupol(){
            document.getElementById('creargrupoL').style.display='block';
            document.getElementById('salirgrupoL').style.display='block';
            document.getElementById('cerrargrupoL').style.display='block';
            document.getElementById('vergrupoA').style.display='none';
         document.getElementById('vergrupoB').style.display='none';
         document.getElementById('vergrupoC').style.display='none';
         document.getElementById('vergrupoD').style.display='none';
         document.getElementById('vergrupoE').style.display='none';
         document.getElementById('vergrupoF').style.display='none';
         document.getElementById('vergrupoG').style.display='none';
         document.getElementById('vergrupoH').style.display='none';
         document.getElementById('vergrupoI').style.display='none';
         document.getElementById('vergrupoJ').style.display='none';
         document.getElementById('vergrupoK').style.display='none';
          

      }

     function cerrargrupol(){
         document.getElementById('creargrupoL').style.display='none';
         document.getElementById('salirgrupoL').style.display='none';
         document.getElementById('cerrargrupoL').style.display='none';
         document.getElementById('vergrupoA').style.display='block';
         document.getElementById('vergrupoB').style.display='block';
         document.getElementById('vergrupoC').style.display='block';
         document.getElementById('vergrupoD').style.display='block';
         document.getElementById('vergrupoE').style.display='block';
         document.getElementById('vergrupoF').style.display='block';
         document.getElementById('vergrupoG').style.display='block';
         document.getElementById('vergrupoH').style.display='block';
         document.getElementById('vergrupoI').style.display='block';
         document.getElementById('vergrupoJ').style.display='block';
         document.getElementById('vergrupoK').style.display='block';
    

   }


     function creargrupol(){
        localStorage.setItem('vergrupol','1')
         document.getElementById('logro').style.display='block';
     }

     function salirgrupol(){
        
        localStorage.removeItem('vergrupol')
         document.getElementById('logro').style.display='none';
     }

 </script>
</body>
</html>