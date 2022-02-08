<?php

//Clase que extiende de Vehiculo y CuatroRuedas
class Coche extends CuatroRuedas{
    private $numCadenaNieve;
    
    //Constructor
    public function __construct($color,$peso,$numPuertas,$numCadenaNieve){
        $this->numCadenaNieve=$numCadenaNieve;
        parent::__construct($color, $peso, $numPuertas);
    }
    
    //Función Añadir cadenas de nieve
    public function añadirCadenasNieve($ponerCadena){
        $this->ponerCadena=$ponerCadena;
        echo "Se le añaden ",$ponerCadena," cadenas de nieve nuevas al vehiculo.<br>";
        echo "Ahora tiene ",$ponerCadena+$this->numCadenaNieve," cadenas.<br>";
    }
    
    //Función quitar cadenas de nieve
    public function quitarCadenasNieve($quitarCadena){
        $this->quitarCadena=$quitarCadena;
        echo "Se quitarán ",$quitarCadena," cadenas de nieve al vehiculo.<br>";
        echo "Ahora tiene ",$this->numCadenaNieve+$this->ponerCadena-$quitarCadena," cadenas.<br>";
    }
    
    //Función toString() que muestra los datos de coche.
    public function __toString() {
        return "Color del Coche: ". $this->getColor()." <br>Peso: ". $this->getPeso()." Kg<br>Número de Puertas: ". $this->getPuertas()."<br>Número de cadenas de nieve: ". $this->numCadenaNieve."<br>";
    }
}

?>