<div class="col-3 bg-primary">
<div class="container">
    <h3 class="text-center mb-4 mt-3">Ingrese Datos</h3>
    <form class="form" id="form" method="POST" action="index.php" >
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="codigo del estudiante" name="codigo" id="codigo" required/>
        </div>

        <div class="mb-3">
            <input type="text" placeholder="dni" class="form-control" name="dni" id="dni" required/>
        </div>
        
        <div class="mb-3">
            <input type="text" placeholder="nombre" class="form-control" name="nombre" id="nombre" required/>
        </div>

        <div class="mb-3">
            <input type="text" placeholder="apellido" class="form-control" name="apellido" id="apellido" required/>
        </div>

        <input type="hidden" name="insertar" value="insertar"/>

        <div class="mb-4">
            <input type="submit" class=" form-control btn-dark" >
        </div>
        
        
        
    </form>
</div>
</div>
