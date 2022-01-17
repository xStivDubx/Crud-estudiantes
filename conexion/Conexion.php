<?php

class Conexion{
    private $SERVIDOR="localhost:3306";
    private $USER="root";
    private $PASSWORD="";
    private $DATABASE="estudiante";

    public function conectar(){
        return mysqli_connect($this->SERVIDOR,$this->USER,$this->PASSWORD,$this->DATABASE);
    }
}

?>