<?php

class Empleado{
    private $nombre;
    private $sueldo;

    public function __construct($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function inicializarlo(){
        echo "Datos del empleado: <br> Nombre: ",$this->nombre,"<br> Sueldo: ",$this->sueldo,"<br>";
    }

    public function impuesto(){

        if($this->sueldo >3000){
            echo "El empleado ",$this->nombre," debe pagar impuestos. <br>";
        }else{
            echo "El empleado ",$this->nombre," no debe pagar impuestos. <br>";
        } 
}

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre=$nombre;
    }
}
?>