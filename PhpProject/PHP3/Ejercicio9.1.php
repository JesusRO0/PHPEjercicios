<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

    $varible1 = $_GET["a"];
    $varible2 = $_GET["b"];
    $varible3 = $_GET["c"];
    
    $neg = - $variable2; 

    $menosV2 = $neg; 
    $oper1 = pow($varible2,2); 
    $oper2 = 4*$varible1*$varible3; 
    $resta = $oper1-$oper2; 
    $raiz = pow($resta,(1/2)); 
    $dosV1 = 2*$varible1; 

    $resultado1 = ($menosV2 + $raiz)/$dosV1;
    $resultado2 = ($menosV2 - $raiz)/$dosV1;

echo "el valor de X1 es: ".$resultado1." <br>";
echo "el valor de X2 es: ".$resultado2." <br>";

?>
</body>
</html>