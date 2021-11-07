
<?php
include "config.php";
if ($_POST) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `register` where email = '" . $email . "' and password = '" . $password . "' ";
  $query =  mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    session_start();
    $_SESSION['name'] = $row['name'];
    header('Location: chatpage.php');
  } else {
    echo "<script> alert('Correo o contraseña incorrectas.'); </script>";
  }
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
    <link rel="stylesheet" type=" text/css" href="../../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../../assets/css/style chat pasante.css" media="screen">
    <title>Chat</title>



    <link rel="icon" href="../../assets/img/social-icon.ico">
  



</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Pasantes ALPHA AIlogic</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../../logins/login.html">Cerrar sesion</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                            <a class="nav-link" href="../pasantes.html">
                                <span data-feather="layers"></span>Pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../asignaciones pasantes.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../grupos pasantes.html">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../chat pasantes.php">
                                <span data-feather="layers"></span>chat
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Chat pasante ALPHA</h1>


                </div>



                <div class="container">
  <center>
    <h2>Iniciando seccion</h2>
  </center></br>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Correo:</label>

      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="ingresa tu correo" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Pass:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="ingresa una contraseña" name="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn2 btn-primary">Iniciar seccion</button>
      </div>
    </div>
  </form>


    
                </div>

            </main>


        </div>
    </div>
</body>

</html>



