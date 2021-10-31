<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

    $dia = $_GET['a'];

    if($dia == 1){
        echo "Hoy es Lunes.";
    }elseif($dia == 2){
        echo "Hoy es Martes";
    }elseif($dia == 3){
        echo "Hoy es Miercoles";
    }elseif($dia == 4){
        echo "Hoy es Jueves";
    }elseif($dia == 5){
        echo "Hoy es Viernes";
    }elseif($dia == 6){
        echo "Hoy es Sábado";
    }elseif($dia ==7){
        echo "Hoy es Domingo";
    }else{
        echo "Error: Introduce un número del 1 al 7";
    }
?>
</body>
</htm