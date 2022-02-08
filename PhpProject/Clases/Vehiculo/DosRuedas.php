<?php

//Clase que extiede de ehiculo
class DosRuedas extends Vehiculo{
    private $cilindrada;
    
    public function __construct($color, $peso, $cilindrada){
            parent::__construct($color, $peso);
            $this->cilindrada = $cilindrada;
            
        }
    //Función litros de gasolina
    public function ponerGasolina($litros){
        echo "Litros introducidos al vehiculo: ",$litros,"<br>";
        echo "El vehiculo pesaría: ",$this->getPeso()+$litros," solo con los litros.<br>";
    }
    
    public function llevaCasco($cascos){
        $this->cascos = $cascos;
        echo "El peso adicional de los cascos al peso del vehiculo es ",$cascos," Kg.<br>";
        echo $this->añadirPersona(80,1)+$cascos," Kg con el peso de los cascos.<br>";
     
    }
    
    public function __destruct(){
        parent::__destruct();
        unset($this->cilindrada);
    }

    //Función toString() que muestra los datos de DosRuedas.
    public function __toString() {
        return "Color del dos ruedas: ". $this->getColor()." <br>Peso: ". $this->getPeso()." Kg<br>Cilindrada: ". $this->cilindrada."<br>";
    }
}

?>