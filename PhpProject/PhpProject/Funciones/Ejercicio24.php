<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="post">
    <h1>Añade un número</h1>
    Numero a buscar: <input type="num" name="num"><br>
    Cantidad: <input type="num" name="cantidad"><br>
    <input type="submit" value="Calcular">
    </form>
    <?php

    if(!isset($num)){
        $num=0;
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

    function estaEnArrayInt($miarray){

        $num = $_POST['num'];

        //Si el numero esta en el array devulve true.
        if(array_search($num,$miarray)==true){

            echo "<br>El número ", $num ," está en el array";
            return true;
        }else{
            echo "<br>No está en el array";
            return false;
        }

    }
    
    estaEnArrayInt($miarray);
    ?>
</body>
</html>