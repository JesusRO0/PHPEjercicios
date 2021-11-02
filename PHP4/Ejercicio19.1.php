<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    
    $num = $_POST['num'];
    
    if(isset($num)){
        
        //Este for indica la altura de la prámide.
        for ($i = 1; $i <= $num; $i++) {
            
        //Este for escribe los asteriscos, asigna y concatena los asteriscos a la variable $cadena mediante ".="  
        for ($h = $i; $h <= $i; $h++) {
            $cadena .= "*";
        }
        
        //Cada vez que se completa un ciclo aumenta los asteriscos.
        echo $cadena, "<br>";
    }
}
    
    
    ?>
</body>
</html>