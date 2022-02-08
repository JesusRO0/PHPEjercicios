    <?php
    
    //Clase Padre Vehiculo
    abstract class Vehiculo{
        private $color;
        private $peso;
        
        //Constructor
        public function __construct($color,$peso){
            $this->color = $color;
            $this->peso = $peso;
        }
        
        //Función de ejemplo 
        public function circula(){
            echo "El vehiculo circula ...<br>";
        }
        
        //función que añade el peso de la persona
        public function añadirPersona($pesoPersona,$personas){
            $this->pesoPersona = $pesoPersona;
            $this->personas = $personas;
            echo "Se han subido al vehiculo ",$personas," personas, el peso de cada persona es de: ",$pesoPersona,"Kg aproximadamente.<br>";
            echo "El peso total del vehículo es: ",$pesoPersona*$personas+$this->peso,"Kg.<br>";
            return $pesoTotal=$pesoPersona*$personas+$this->peso;
        }
        
        public static function ver_atributo($objeto){
            
            echo $objeto;
        }


        public function __destruct(){
        unset($this->color);
        unset($this->peso);
        }

        public function getColor(){
            return $this->color;
        }
        public function setColor($color) {
            $this->color=$color;
        }

        public function getPeso(){
            return $this->peso;
        }
        public function setPeso($peso) {
            $this->peso=$peso;
        }
    }
    
    ?>