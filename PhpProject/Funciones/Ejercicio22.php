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

    function maximoArrayInt($miarray){

    //con la función max sabemos cual es el número máximo de un array
    echo "El número máximo del array es: ", max($miarray);

    return $miarray;
    }
    
    maximoArrayInt($miarray);
    ?>
</body>
</html>