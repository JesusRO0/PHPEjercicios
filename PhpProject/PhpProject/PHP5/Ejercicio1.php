<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <?php
    
    //Le asignamos a $num un array de 20 numeros aleatorios del 0 al 100.
    for ($i = 0; $i < 20; $i++) {
    $num[$i] = rand(0, 100);
    }
    
    //Con el iterador foreach le asignamos el mismo array de $num a $cuadrado y $cubo,
    //con la diferencia que lo repetimos para multiplicarlos y sacar el cuadrado y el cubo de los números aleatorios.
    foreach ($num as $array) {
        
    $cuadrado[] = $array * $array;
    $cubo[] = $array * $array * $array;
    }
    
    //Empezamos a crear la tabla que contendrá los números.
    echo "<table><tr><th colspan=3>Tabla de arrays</th></tr>";
    echo "<tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>";
    
    
    //Bucle que imprime los 20 número aleatorios calculados en la tabla.
    for ($i = 0; $i < 20; $i++) {
     
    echo "<tr><td>",$num[$i],"</td>";
    echo "<td>",$cuadrado[$i],"</td>";
    echo "<td>",$cubo[$i],"</td></tr>";
    }
    
    //Fin de la tabla.
    echo "</table>";
    
    ?>
</body>
</html>