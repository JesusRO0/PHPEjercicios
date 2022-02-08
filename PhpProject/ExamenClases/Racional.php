<?php
class Racional extends OperacionRacional{

    private $num;
    private $den;
    private $num2;
    private $den2;

    /**
     * Racional constructor.
     * @param $num
     * @param $den
     * Si el denominador esta vacio, dependiendo del valor de num dara un valor u otro.
     */
    // TODO: Implementa el constructor 
    public function __construct($num, $den){
        $this->den=$den;
        $this->num=$num;
    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la suma de dos fracciones
     */
    // TODO: Completa el método
    public function suma (Racional $b) {
        // Si ambos denominadores son iguales
        if ($this->getDen() == $this->getDen2() ){
            // 1. - Calcular numerador
           $numerador= $this->getNum() + $this->getNum2();
            // 2. - Calcular denominador
           $denominador = $this->getDen() + $this->getDen2();
            // 3. - Crear un nuevo racional
            
            // 4. - Devolver el resultado 
        } else if($this->getDen() != $this->getDen2()){
            
            $denominador = $this->getDen() + $this->getDen2();
            
            $numerador= $this->getNum() * $this->getNum2();
            
            return $resultado = $numerador.'/'.$denominador;
        }
        return $resultado = $numerador.'/'.$denominador;
    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la resta de dos fracciones
     */
    // TODO: Implementa el método
    public function resta (Racional $b){
        $resultado = $this->getDen() ." / ". $this->getNum() - $this->getDen(). " / ". $this->getNum();
        return $resultado;
    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la multiplicacion de dos fracciones
     */
    // TODO: Implementa el método
    public function multiplicar (Racional $b){
        
        $resultado = $this->getDen() ." / ". $this->getNum() * $this->getDen(). " / ". $this->getNum();
        return $resultado;
    }

    /**
     * @param Racional $b
     * @return string
     * Calcula la division de dos fracciones
     */
    // TODO: Implementa el método
    public function dividir (Racional $b){
        $resultado = $this->getDen() ." / ". $this->getNum() / $this->getDen(). " / ". $this->getNum();
        return $resultado;
    }

    /**
     * @return mixed
     * Getters y Setters
     */

    public function getNum(){
        return $this->num;
    }

    public function getDen(){
        return $this->den;
    }

    public function getNum2(){
        return $this->num2;
    }

    public function getDen2(){
        return $this->den2;
    }
}
?>