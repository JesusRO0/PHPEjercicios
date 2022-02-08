<?php

class Dadopoker{
    
    private static $tiradas=0;
    private $caraAleatoria="";
    static $cara=["As","K","Q","J","7","8"];

    //Constructor
    public function __construct(){

    }
    
    public function tira(){
        self::$tiradas++;
        $this->caraAleatoria=self::$cara[rand(0,5)];
        return $this->caraAleatoria;
    }
    
    public function nombreFigura(){
        return $this->caraAleatoria;
        
    }
    
    public function getTiradasTotales(){
        return self::$tiradas;
    }
    
    public function __toString() {
        return "La cara ha sido: ". $this->caraAleatoria." ,el número de tiradas es: ". self::$tiradas;
    }
   
}

?>