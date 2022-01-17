<?php
include("conexion/Conexion.php");
include("controlador/controllerStudent.php");
include("modelo/Estudiante.php");


if($_POST){
  $codigo= $_POST['codigo'];
  $dni= $_POST['dni'];
  $nombre= $_POST['nombre'];
  $apellido= $_POST['apellido'];

  ControllerStudent::insertar($codigo,$dni,$nombre,$apellido);

  header("Location: index.php");
  exit;
}


if($_GET){
  $codigo=$_GET['codigo'];
  
  ControllerStudent::eliminar($codigo);
  header("Location: index.php");
  exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Crud de Estudiantes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      
    <div class="container my-3">
        <div class="row">
           <?php include_once('vistas/formulario.php');
                include_once('vistas/lista_alumnos.php');
           ?>

           
        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>