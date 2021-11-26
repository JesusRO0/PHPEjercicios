<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

    $a = $_GET['a'];
   
    if($a > 40){
        $salario = 16;
        $resultado = $salario*$a;
        echo "El salario total es de $resultado Euros";
    }else{
        $salario = 12;
        $resultado = $salario*$a;
        echo "El salario total es de $resultado Euros";
    }
   
?>
</body>
</html>