<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

//Acceder a los archivos para instanciarlos
require './empleado.php';


//Instanciar una clase
$empleado1 = new Empleado("Jesús",3500);
$empleado2 = new Empleado("Alejandra", 2600);


//Usar un método de la clase
$empleado1->inicializarlo();
$empleado1->impuesto();
$empleado2->inicializarlo();
$empleado2->impuesto();


//var_dump($empleado1);

?>