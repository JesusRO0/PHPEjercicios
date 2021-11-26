<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="post">
    <h1>Añade un número</h1>
    Cantidad: <input type="num" name="cantidad"><br>
    <input type="submit" value="Calcular">
    </form>
    <?php

    if(!isset($cantidad)){

        $cantidad=0;
    }

    $cantidad = $_POST['cantidad'];

    //for que indica un array de numeros randoms entre 0 a 100, el usuario inidca la cantidad de número que tendrá
    for($i=0; $i<$cantidad;$i++){

        $miarray[$i] = rand(0, 100);
    }

    //el foreach recorre el array y muestra los números aleatorios
    echo "Los números son: <br>";
    foreach($miarray as $numeros){
        echo $numeros, ", ";
    }
    echo "<br>";

    function volteaArrayInt($miarray){


    //Con array_reverse() invertimos el array
    $arrayInvertido = array_reverse($miarray);
    echo "Array invertido: <br>";
    //Volvemos a recorer el array pero ahora invertido.
    foreach($arrayInvertido as $arrayInverted){
        echo $arrayInverted, ", ";
    }
    return $arrayInverted;
    }
    
    volteaArrayInt($miarray);
    ?>
</body>
</html>