<?php

class Vehiculo{
    
    private static $kmTotales=0;
    private $kmRecorridos=0;
    private static $VehiculosTotales=0;

    //Constructor
    public function __construct($kmRecorridos){
        $this->km=$km;
        self::VehiculosTotales;
        self::$kmTotales;
    }
    
    public function getVehiculosCreados(){
        return $this->VehiculosTotales;
    }
    
    public function getKmTotales(){
        return $this->kmTotales;
    }
    
    public function getKmRecorridos(){
        return $this->kmRecorridos;
    }
    
   
}

?>