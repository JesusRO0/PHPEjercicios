<?php

/**
 * Class OperacionReal
 * Realiza una operación real
 */
class OperacionReal extends Operacion{

    /**
     * OperacionReal constructor.
     * @param $operacion
     * Constructor hererado de la clase padre Operacion
     */
    public function __construct($operando1,$operando2,$operacion,$tipo,$resultado) {
        parent::__construct($operando1,$operando2,$operacion,$tipo,$resultado);
    }

    /**
     * @param $op1
     * @param $op2
     * @param $operador
     * Metodo para resolver las operaciones requeridas 
     * con números reales (+,-,*,/) y devolver el resultado
     */
    /* TODO: Implementa esta función para que con los parámetros recibidos, 
    sea capaz de resolver las operaciones requeridas con números reales (+, -, *, /) 
     y devolver el resultado obtenido */
    public function operacionReal($operando1, $operando2, $operador){
        $resultado = $this->getOperando1() ." + ". $this->getOperando2();
        $resultado = $this->getOperando1() ." - ". $this->getOperando2();
        $resultado = $this->getOperando1() ." * ". $this->getOperando2();
        $resultado = $this->getOperando1() ." / ". $this->getOperando2();
        
        return $resultado;
    }

}
?>