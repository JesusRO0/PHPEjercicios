<?php

//Clase Camion que extiende de CuatroRuedas y Vehiculo
class Camion extends CuatroRuedas{
    private $longitud;
    
    //Constructor
    public function __construct($color,$peso, $numPuertas,$longitud){
        parent::__construct($color,$peso, $numPuertas);
        $this->longitud=$longitud;
        
    }
    
    //Función añadir un remolque
    public function añadirRemolque($longitud_remolque){
        $this->longitud_remolque=$longitud_remolque;
        echo "Longitud del remolque: ",$longitud_remolque, " metros.<br>";
        echo "Junto al remolque el camion tiene de longitud ",$longitud_remolque+$this->longitud," metros.<br>";
    }
    
    public function getLongitud(){
        return $this->longitud;
    }
    public function setLongitud($longitud) {
        $this->longitud=$longitud;
    }
    
    public function __destruct() {
        parent::__destruct();
        unset($this->longitud);
    }

    //Función toString() que muestra los datos de camion.
    public function __toString() {
        return "Color del Camión: ". $this->getColor()." <br>Peso: ". $this->getPeso()." Kg<br>Número de Puertas: ". $this->getPuertas()."<br>Longitud del camión: ". $this->longitud."<br>";
    }
}

?>