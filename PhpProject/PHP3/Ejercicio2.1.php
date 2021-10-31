<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

    $hora = $_GET['a'];
    
    if($hora >=6 && $hora <=12){
        echo "Buenos días";
        
    }elseif($hora >=13 && $hora <=20){
        echo "Buenas tardes";
        
    }elseif($hora >=21 && $hora <24){
        echo "Buenas noches";
        
    }elseif($hora >=0 && $hora <=5){
        
        echo "Buenas noches";
    }else{
        
        echo "Error: Horario de 24horas.";
    }

?>
</body>
</html>