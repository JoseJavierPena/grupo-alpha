<!DOCTYPE html>
<html lang="en">
<?php
//include "validar formulario.php";

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <title>Formulario</title>

    <link rel="icon" href="../assets/img/social-icon.ico">
</head>

<body>


    <div class="container">

        <div class="row mx-0 mx-md-5 mb-5 ">

            <form class="border mt-5  p-5 rounded  shadow col-12" action="Formulario.php" method="post">


                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="../assets/img/horizontal/oscuro/small.png" alt="">
                </div>


                <h2 class="mb-3 ">Formulario</h2>
                <p class="text-justify">Completar este formulario para tener mas información acerca de usted y poder contactarnos.</p>

                <div class="Form my-4">
                    <label for="First_name" class="form-label"><b>Nombre:</b></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese el nombre.
                    </div>
                </div>

                <div class="Form  my-4">
                    <label for="Last_name" class="form-label"><b>Apellido:</b></label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese el Apellido.
                    </div>
                </div>

                <div class="Form  my-4">
                    <label for="cedula" class="form-label"><b>Cédula:</b></label>
                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese la Cédula.
                    </div>
                </div>

                <div class="Form  my-4">
                    <label for="College" class="form-label"><b>Universidad:</b></label>
                    <input type="text" class="form-control" id="universidad" name="universidad" placeholder="Universidad" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese una Universidad.
                    </div>
                </div>

                <div class="Form  my-4">
                    <label for="Cellphone" class="form-label"><b>Teléfono:</b></label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="809-000-000" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese un Teléfono.
                    </div>
                </div>

                <div class="Form  my-4">
                    <label for="Adress" class="form-label"><b>Dirección:</b></label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese una Dirección.
                    </div>
                </div>
                <div class="Form   my-4">
                    <label for="Location" class="form-label"><b>¿En qué zona del país reside?</b></label>
                    <input type="text" class="form-control" id="donde_vives" name="donde_vives" placeholder="R.D santo domingo" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese una Residencia.
                    </div>
                </div>

                <div class="Form">
                    <label for="Imail" class="form-label"><b>Correo:</b></label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Email@gmail.com" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese un correo.
                    </div>


                    <hr class="my-4">


                    <button type="submit" class="btn w-100 p-2 text-white" name="enviar" style="background-color: #39ace7 ;"><h5>Enviar y continuar</h5></button>
                </div>
            </form>

            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1 text-center">© 2021 Pasantes ALPHA AIlogic</p>
            </footer>


        </div>
    </div>




</body>

</html>