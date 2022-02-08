<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <?php
    
    $num = 12345;
    //convierte el número en una cadena;
    $cadena = strval($num); 
    
    //Vuelve a convertir en entero;
    settype($num, "integer");
    
    echo $num;
    
    ?>

</body>
</html>