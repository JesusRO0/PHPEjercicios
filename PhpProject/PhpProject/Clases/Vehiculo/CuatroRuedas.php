<?php

//Clase CuatroRuedas que extiende de Vehiculo
class CuatroRuedas extends Vehiculo{
    private $numPuertas;
    
    //Constructor de CuatroRuedas
    public function __construct($color, $peso, $numPuertas){
        parent::__construct($color, $peso);
        $this->numPuertas = $numPuertas;    
    }
    
    //Funcion de volver a pintar
    public function repintar($color){
        $this->color = $color;
        echo "Hemos cambiado el color del vehiculo a ",$color, "<br>";
    }
    
    public function __destruct(){
        parent::__destruct();
        unset($this->numPuertas);
    }

    public function getPuertas(){
        return $this->numPuertas;
    }
    public function setPuertas($numPuertas) {
        $this->numPuertas=$numPuertas;
    }
}


?>