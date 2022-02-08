<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

//Acceder a los archivos para instanciarlos
require './Bicicleta.php';
require './Vehiculo.php';
require './Coche.php';

$coche1 = new Coche(4500, 1200, 3);

$coche1->utilidadCoche();
$coche1->verKilometrajeCoche();