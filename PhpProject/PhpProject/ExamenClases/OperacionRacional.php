<?php

/**
 * Class OperacionRacional
 * Realiza una operación racional
 */
class OperacionRacional extends Operacion{
    
    public $fraccion;
    public $fraccion2;

    public function __construct($fraccion,$operando1,$operando2,$operacion,$tipo,$resultado) {
        parent::__construct($operando1,$operando2,$operacion,$tipo,$resultado);
        $this->fraccion=$fraccion;
    }

    /**
     * @param $fraccion
     * @return string
     * Simplifica la fraccion pasada por parametro, utilizando el mcd
     */
    // TODO: Completa el método
    public function simplifica($fraccion){

        // 1. - Separamos los operandos de una fracción
        $operandos = preg_split('/\//',$this->fraccion);
        $this->getOperando1() = $operandos[0];
        $this->getOperando2() = $operandos[1];

        // 2. - Calculamos el mcd 
        $operandos[0] = $this->getOperando1() / $this->getOperando1();
        $operandos[1] = $this->getOperando2() / $this->getOperando2();

        // 3. - Realizamos la simplificación

        // 4. - Devolvemos el resultado
        
    }

    /**
     * @param OperacionRacional $objeto
     * @return string
     * Separa los operandos para crear con ellos 2 objetos fraccion Racional
     * Y se encarga de llamar a la funcion necesaria para sumar,restar,etc.
     */
    // TODO: Implementa el método
    public function operacionRacional(OperacionRacional $objeto){

        // 1. - Separa los operandos de la operación entre fracciones

        // 2. - Crea los dos racionales con los operandos obtenidos

        // 3. - Comprueba el operador, realiza el calculo que corresponda y devuelve el resultado

        // PISTA:
        // - Tanto al separar operandos como al obtener el operador, 
        //   es muy importante el uso de getters.
    }
    
}
?>