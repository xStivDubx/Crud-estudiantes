<?php




class ControllerStudent{

    

    public static function listaEstudiantes(){
        $conexion = new Conexion();
        $conn = $conexion->conectar();
        $prepare = mysqli_prepare($conn,"SELECT * FROM estudiante");
        $prepare->execute();

        $resultado=$prepare->get_result();
        $estudiantes= [];

        while($estudiante = $resultado->fetch_object(Estudiante::class)){
            array_push($estudiantes,$estudiante);
        }
        $conn=null;
        return $estudiantes;
    }


    public static function insertar($codigo,$dni,$nombre,$apellido){
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $prepare = mysqli_prepare($conn, "INSERT INTO estudiante(codigo,dni,nombre,apellido) VALUES(?,?,?,?)");
        $prepare->bind_param("ssss",$codigo,$dni,$nombre,$apellido);

        $prepare->execute();
        $conn=null;
    }

    public static function eliminar($codigo){
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $prepare= mysqli_prepare($conn,"DELETE FROM estudiante WHERE codigo=?");
        $prepare->bind_param("s",$codigo);
        $prepare->execute();
        $conn=null;
    }

    public static function getStudent($codigo){
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $prepare= mysqli_prepare($conn,"SELECT * FROM estudiante WHERE codigo= ?");
        $prepare->bind_param("s",$codigo);

        $prepare->execute();

        $result= $prepare->get_result();

        return $result->fetch_object(Estudiante::class);
    }

    public static function update($codigo,$dni,$nombre,$apellido){

        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $prepare= mysqli_prepare($conn,"UPDATE estudiante set dni=?,nombre=?,apellido=? WHERE codigo=?");
        $prepare->bind_param("ssss",$dni,$nombre,$apellido,$codigo);

        $prepare->execute();
        $conn=null;

    }

}




/*
$controlador= new ControllerStudent();

$estudiantes= $controlador->listaEstudiantes();*/

//var_dump($estudiantes);

?>