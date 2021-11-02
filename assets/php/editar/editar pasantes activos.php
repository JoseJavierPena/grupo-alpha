<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../../css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../../css/style Formulario.css" media="screen">
    <title>Formulario</title>


    <link rel="icon" href="../../img/social-icon.ico">

</head>

<body>
    <?php
    $id=$_GET['id'];
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $cedula=$_GET['cedula'];
    $universidad=$_GET['universidad'];
    $telefono=$_GET['telefono'];
    $direccion=$_GET['direccion'];
    $donde_vives=$_GET['donde_vives'];
    $correo=$_GET['correo'];
    
    ?>

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../../img/horizontal/oscuro/medium.png" alt="" width="400" height="100">

            </div>

            <div class="row g-5">

                <div class="Formulario">
                    <h2 class="mb-3">Formulario</h2>
                    <p class="lead">Completar este formulario para tener mas informacion acerca de usted y poder contactarnos.</p>
                    <form action="../actualizar/actualizar pasantes activos.php" method="post">

                    <div class="Formulario">
                            <label for="First_name" class="form-label">ID:</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?= $id?>" placeholder=""  required="">
                            
                        </div>

                        <div class="Formulario">
                            <label for="First_name" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $nombre?>" placeholder="" required="">
                            <div class="invalid-feedback">
                                Ingrese el nombre.
                            </div>
                        </div>
                        <div class="Formulario">
                            <label for="Last_name" class="form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $apellido?>" placeholder=""  required="">
                            <div class="invalid-feedback">
                                Ingrese el Apellido.
                            </div>
                        </div>
                        <div class="Formulario">
                            <label for="cedula" class="form-label">Cédula:</label>
                            <input type="text" class="form-control" id="cedula"  name="cedula" value="<?= $cedula?>" placeholder=""  required="">
                            <div class="invalid-feedback">
                                Ingrese la Cedula.
                            </div>
                        </div>
                        <div class="Formulario">
                            <label for="College" class="form-label">Universidad:</label>
                            <input type="text" class="form-control" id="universidad" name="universidad" value="<?= $universidad?>" placeholder=""  required="">
                            <div class="invalid-feedback">
                                Ingrese una Universidad.
                            </div>
                        </div>
                        <div class="Formulario">
                            <label for="Cellphone" class="form-label">Teléfono:</label>
                            <input type="text" class="form-control" id="telefono" name="telefono"  value="<?= $telefono?>" placeholder="" required="">
                            <div class="invalid-feedback">
                                Ingrese un Telefono.
                            </div>
                        </div>


                        <div class="Formulario">
                            <label for="Adress" class="form-label">Direccion:</label>
                            <input type="text" class="form-control" id="direccion" name="direccion"  value="<?= $direccion?>" placeholder="" required="">
                            <div class="invalid-feedback">
                                Ingrese una Direccion.
                            </div>
                        </div>
                        <div class="Formulario">
                            <label for="Location" class="form-label">En que zona del pais reside:</label>
                            <input type="text" class="form-control" id="donde_vives" name="donde_vives"  value="<?= $donde_vives?>" placeholder=""  required="">
                            <div class="invalid-feedback">
                                Ingrese una Risidencia.
                            </div>
                        </div>
                        <div class="Formulario">
                            <label for="Imail" class="form-label">Correo:</label>
                            <input type="text" class="form-control" id="correo" name="correo" value="<?= $correo?>" placeholder=""  required="">
                            <div class="invalid-feedback">
                                Ingrese un correo.
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg " type="submit">Actualizar</button>
                            

                        </div>
                        <div class="Formulario">
                        <a href="../../../admin/pasantes activos.php" button class="w-100 btn btn-primary btn-lg ">Cancelar</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2021 Pasantes ALPHA AIlogic</p>
           
        </footer>
    </div>





</body>


</html>