<?php
session_start();
if (isset($_SESSION['name'])) {
	include "config.php";

	$sql = "SELECT * FROM `chat`";

	$query = mysqli_query($conn, $sql);
?>
	
	<meta http-equiv="refresh" content="20"> <!-- para refrescar la pagina-->
	<script>
		$(document).ready(function() {
			// Set trigger and container variables
			var trigger = $('.container .display-chat '),
				container = $('#content');

			// Fire on click
			trigger.on('click', function() {
				// Set $this for re-use. Set target from data attribute
				var $this = $(this),
					target = $this.data('target');

				// Load target page into container
				container.load(target + '.php');

				// Stop normal link behavior
				return false;
			});
		});
	</script>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../../assets/css/style chat admin.css" media="screen">
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
                <a class="nav-link px-3" href="login.php">Cerrar sesion</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../Pasantes activos.php">
                                <span data-feather="home">Pasantes activos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../informacion de evaluaciones pasantes.php">
                                <span data-feather="file"></span>Informacion de evaluaciones pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../seguimiento de recursos.php">
                                <span data-feather="bar-chart-2"></span> Seguimiento de recurso
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../recursos.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="../asignaciones administrador.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../grupos administrador.html">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pasantes/pasantes.html">
                                <span data-feather="layers"></span>Pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../chat admin.php">
                                <span data-feather="layers"></span>Chat
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
			<h2>Bienvenid@ <span style="color:#120633; font-weight: 600;"><?php echo $_SESSION['name']; ?> </span> a nuestro Chat</h2>
			
		</center></br>
		<div class="display-chat" id="display-chat">
			<?php
			if (mysqli_num_rows($query) > 0) {
				while ($row = mysqli_fetch_assoc($query)) {
			?>
					<div class="message">
						<p>
							<span><?php echo $row['name']; ?> :</span>
							<?php echo $row['message']; ?>
						</p>
					</div>
                    <hr>
				<?php
				}
			} else {
				?>
				<div class="message">
					<p>
						No hay ninguna conversación previa.
					</p>
				</div>
			<?php
			}
			?>

		</div>



		<form class="form-horizontal" method="post" action="sendMessage.php">
			<div class="form-group">
				<div class="col-sm-10">
					<textarea name="msg" class="form-control" style="border: ridge 2px #56abf1;color: #000;" placeholder="Ingrese su Mensaje"></textarea>
				</div>
<br>
				<div class="col-sm-2">
					<button type="submit" class="btn3 " style="font-size: 22px;">Enviar</button>
				</div>

			</div>
		</form>
	</div>

                   
                </div>

            </main>


        </div>
    </div>
</body>

</html>




<?php
} else {
	header('location:index.html');
}
?>