<?php

require './Vehiculo.php';

class Coche extends Vehiculo{
    
    
    //Constructor
    public function __construct($kmTotales,$kmRecorridos,$VehiculosTotales){
        parent::__construct($kmTotales,$kmRecorridos,$VehiculosTotales);
    }
    
     public function utilidadCoche(){
        echo "Anda con el coche<br>";
        echo "Quema rueda con el coche";
    }
    
    public function verKilometrajeCoche(){
        echo "El kilometraje Total de las Biciletas es: ",$TotalKM = $this->getKmTotales()+$this->getKmRecorridos();
        echo "El kilometraje de la bicileta es: ", $this->getKmRecorridos();
    }
   
}

?>