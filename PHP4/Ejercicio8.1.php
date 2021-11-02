<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <table>
    
<?php

    $num = $_GET['a'];
    
    //Titulo de la tabla.
    echo "<tr><th colspan=2>Tabla de multiplicar del $num<th></tr><br>";
    echo '<tr><th>Calculo</th><th>Resultado</th></tr><br>';
    
    //Este bucle for multiplica el num que nosotros introducimos por la variable $i que va creciendo.
    for($i=1; $i <= 10; $i++){
        
        $resultado = $num*$i; 
        echo "<tr><th>$num*$i</th><th>$resultado</th></tr><br>";
    }

?>
    </table>
</body>
</html>