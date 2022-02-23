<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="post">
    <h1>Añade un número</h1>
    Cantidad: <input type="num" name="cantidad"><br>
    Mínimo: <input type="num" name="minimo"><br>
    Máximo: <input type="num" name="maximo"><br>
    <input type="submit" value="Calcular">
    </form>
    <?php

    if(!isset($cantidad)){
        $cantidad=0;
    }

    $cantidad = $_POST['cantidad'];
    $maximo = $_POST['maximo'];
    $minimo = $_POST['minimo'];

    function generaArrayInt($cantidad,$maximo,$minimo){

    //asignamos los números del array 
    for($i=0; $i<$cantidad;$i++){

        $miarray[$i] = rand($minimo, $maximo);
    }

    //Mostramos los números del array
    echo "Los números son: <br>";
    foreach($miarray as $numeros){
        echo $numeros, ", ";
    }
    return $miarray;
    }
    
    generaArrayInt($cantidad,$maximo,$minimo);
    ?>
</body>
</html>