<?php

class Estudiante{
    private $codigo;
    private $dni;
    private $nombre;
    private $apellido;



    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }

    public function getDni(){
        return $this->dni;
    }

    public function setDni($dni){
        $this->dni=$dni;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

}




?>