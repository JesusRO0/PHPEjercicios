<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require './DadoPoker.php';

$dado1 = new Dadopoker();
$dado2 = new Dadopoker();
$dado3 = new Dadopoker();
$dado4 = new Dadopoker();
$dado5 = new Dadopoker();

$dado1->tira();
$dado1->nombreFigura();
$dado1->getTiradasTotales();
echo $dado1;

?>