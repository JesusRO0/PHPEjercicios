<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="post">
    <h1>Añade un número</h1>
    Cantidad: <input type="num" name="cantidad"><br>
    Números a rotar: <input type="num" name="rotar"><br>
    <input type="submit" value="Calcular">
    </form>
    <?php

    if(!isset($cantidad)){
        $rotar=0;
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

    function rotaIzquierdaArrayInt($miarray,$cantidad){

        $rotar = $_POST['rotar'];

        //Hacemos lo mismo que en el ejercicio anterior pero al revés
        //Quitamos el primer número y los insertamos al final del array
        for($i=0; $i<$rotar;$i++){

            $primero = array_shift($miarray);
            array_push($miarray, $primero);
        }

        //Mostramos el array movido
        echo "<br>El array movido es: <br>";
        foreach($miarray as $arrayMovido){
            echo $arrayMovido, ", ";
        }
    }
    
    rotaIzquierdaArrayInt($miarray,$cantidad);
    ?>
</body>
</html>