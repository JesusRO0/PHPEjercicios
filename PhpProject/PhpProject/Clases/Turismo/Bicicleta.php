<?php

require './Vehiculo.php';

class Bicicleta extends Vehiculo {
    private $marca;
    
    //Constructor
    public function __construct($kmTotales,$kmRecorridos,$VehiculosTotales){
        parent::__construct($kmTotales,$kmRecorridos,$VehiculosTotales);
        $this->marca;
    }
    
    public function utilidadBicibleta(){
        echo "Anda con la bicicleta<br>";
        echo "Hago un caballito con la bicileta";
    }

    public function verKilometrajeBicicleta(){
        echo "El kilometraje Total de las Biciletas es: ", $TotalKM = $this->getKmTotales()+$this->getKmRecorridos();
        echo "El kilometraje de la bicileta es: ", $this->getKmRecorridos();
    }
   
    //Función toString() que muestra los datos de camion.
    public function __toString() {
        return "La marca de la bicicleta es ". $this->marca;
    }
}

?>