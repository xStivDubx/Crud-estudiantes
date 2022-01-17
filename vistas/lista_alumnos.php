<?php 
$estudiantes = ControllerStudent::listaEstudiantes();

?>
<div class="col-9 bg-secondary">

    <div class="container my-3">

        <table class="table text-white text-center">
            <thead class="thead-dark ">
                <tr>
                    <th>CÓDIGO</th>
                    <th>DNI</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                
                    foreach($estudiantes as $estudiante){
                        $rutaEliminar="index.php?codigo=".$estudiante->getCodigo();
                        $rutaEditar="vistas/editar.php?codigo".$estudiante->getCodigo();
                        echo "<tr>
                        <td>". $estudiante->getCodigo() ."</td>
                        <td>". $estudiante->getDni() ."</td>
                                <td>". $estudiante->getNombre() ." </td>
                                <td>". $estudiante->getApellido() ."</td>
                                <td>
                                    <a href='$rutaEditar' class='btn bg-warning form-control'>Editar</a>
                                </td>
                                <td>
                                <a href='$rutaEliminar' class='btn bg-danger form-control'>Eliminar</a>
                                </td>
                            
                        </tr>";
                    }
                ?>
                
            </tbody>
        </table>
    </div>
</div>




