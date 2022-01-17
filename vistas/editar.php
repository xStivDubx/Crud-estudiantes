<?php
include("./../controlador/controllerStudent.php");
include("./../modelo/Estudiante.php");
include("./../conexion/Conexion.php");

$codigo= $_GET['codigo'];

$estudiante= ControllerStudent::getStudent($codigo);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container my-5">
    <div class="row justify-content-center.">
        
        <div class="col-5 bg-primary">
            <div class="container">
                <h3 class="text-center mb-4 mt-3">Ingrese Datos</h3>
                <form class="form" id="form" method="POST" action="./../index.php" >
                    <div class="mb-3">
                    <input type="text" placeholder="codigo" class="form-control" name="codigo" id="codigo" readonly value="<?=$estudiante->getCodigo()?>"/>
                    </div>

                    <div class="mb-3">
                        <input type="text" placeholder="dni" class="form-control" name="dni" id="dni" required value="<?=$estudiante->getDni()?>"/>
                    </div>
                    
                    <div class="mb-3">
                        <input type="text" placeholder="nombre" class="form-control" name="nombre" id="nombre" required value="<?=$estudiante->getNombre()?>"/>
                    </div>

                    <div class="mb-3">
                        <input type="text" placeholder="apellido" class="form-control" name="apellido" id="apellido" required value="<?=$estudiante->getApellido()?>"/>
                    </div>

                    <input type="hidden" name="actualizar" value="actualizar"/>

                    <div class="mb-4 center-block">
                        <input type="submit" class="btn btn-success" value="actualizar" >
                        <a href="./../index.php" class="btn btn-danger">Cancelar</a>
                    </div>
                    
                    
                    
                </form>
            </div>
        </div>

           
        </div>
    </div>


</body>
</html>