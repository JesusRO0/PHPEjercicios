<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

    $nota1 = $_GET["a"];
    $nota2 = $_GET["b"];
    $nota3 = $_GET["c"];
    
    $notaFinal = ($nota1 + $nota2 + $nota3)/3;
    
    if($notaFinal < 5){
        echo "La media es: $notaFinal Insuficiente.";
    }elseif($notaFinal >= 5 && $notaFinal <=6){
        echo "La media es: $notaFinal Suficiente.";
    }elseif($notaFinal >= 7 && $notaFinal <=8){
        echo "La media es: $notaFinal Notable.";
    }elseif($notaFinal >=9 && $notaFinal <=10){
        echo "La media es: $notaFinal Sobresaliente.";
    }else{
        echo "Error, introduce una nota de 0 a 10";
    }

?>
</body>
</html>