<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

//Acceder a los archivos para instanciarlos
require './facturas.php';


//Instanciar una clase
$factura1 = new Factura(100,"15/11/2021",1100,"pendiente");

//Usar un método de la clase
$factura1->imprime();
echo $factura1;

?>
