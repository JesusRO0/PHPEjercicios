<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <?php
    
    if(!isset($num)){
    echo "Array original:<br>";

    for ($i=0;$i<20;$i++) {
        $num[$i] = rand(0, 100);
        
        echo " ",$num[$i];
    }
    
    echo "<br><br>";
    
    //Seteamos las variables de los pares e impares, una a 0 que iran al principio en el array y la otra a 20 -1 que empezará por el final.
    $impares = 0;
    $pares = 20 - 1;
    
    //Este for coge los numeros aleatorios y los clasifica en pares e impares y los mete en la variable $numeros
    for ($i=0;$i<20;$i++) {
            if ($num[$i]%2 == 0){  // es par
                    $numeros[$pares--] = $num[$i];
            }
            else {
                    $numeros[$impares++] = $num[$i];
            }
    }

    //Escribimos el array de pares e impares en cada lado.
    echo "El array con los pares a un lado y los impares a otro. <br>";

    for ($i=0; $i < 20; $i++) {
            echo $numeros[$i]." ";
    }
    }

    ?>
</body>
</html>