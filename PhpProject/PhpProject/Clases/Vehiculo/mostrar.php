<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

//Acceder a los archivos para instanciarlos
require './Vehiculo.php';
require './CuatroRuedas.php';
require './DosRuedas.php';
require './Coche.php';
require './Camion.php';

//Instanciar una clase
$coche1 = new Coche("negro", 1500, 4, 3);
$camion1 = new Camion("verde", 2300, 2, 12);

//Ejercicio 2:
echo "<h2>Ejercicio 2: Mostrar el color y peso del vehiculo, hacer que circule y cambiar el peso.</h2>";
echo "<h4>Información del Coche:</h4>";
echo $coche1;
echo "<br>";
$coche1->añadirPersona(70,2);
$coche1->circula();

//Ejercicio 3:
echo "<h2>Ejercicio 3: Continuacion del ejercicio 2.</h2>";
$coche1->repintar("Amarillo.");
//$coche1->ponerGasolina(10);
$coche1->añadirCadenasNieve(1);
$coche1->quitarCadenasNieve(2);

echo "<h4>Información de camión:</h4>";
echo $camion1;
$camion1->añadirRemolque(3);

echo "<h4>Nuevo vehiculo:</h4>";
$coche2 = new Coche("verde", 1400, 4, 3);
echo $coche2;
$coche2->añadirPersona(65,2);
$coche2->repintar("Rojo.");
$coche2->añadirCadenasNieve(2);

echo "<h4>Creamos el objeto dosRuedas:</h4>";
$dosRuedas = new DosRuedas("Negro",120,330);
echo $dosRuedas;
$dosRuedas->añadirPersona(80,1);
$dosRuedas->ponerGasolina(20);

echo "<h4>Creamos otro Camión:</h4>";
$camion2 = new Camion("azul", 10000, 2, 10);
echo $camion2;
$camion2->añadirRemolque(5);
$camion2->añadirPersona(80,1);

//Ejercicio 4:
echo "<h2>Ejercicio 4: Continuacion del ejercicio 3.</h2>";
$dosRuedas->llevaCasco(2);
echo "<h4>Mostrar ver_atributo del objeto Coche.</h4>";
$coche1->ver_atributo($coche1);
echo "<h4>Creamos otro dos ruedas:</h4>";
$dosRuedas2 = new DosRuedas("Rojo",150,1000);
$dosRuedas2->añadirPersona(70,1);
$dosRuedas2->setColor("Verde.");
$dosRuedas2->ver_atributo($dosRuedas2);
echo "<h4>Creamos otro camión:</h4>";
$camion3 = new Camion("Blanco", 6000, 2, 10);
$camion3->añadirPersona(84,1);
$camion3->setColor("Azul.");
$camion3->ver_atributo($camion3);
?>