<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>Introduce un número.</h3>
    <form action="#" method="get">
    Número: <input type="number" min="0" name="numero">
    <input type="submit" value="Enviar">
    </form>
    
    <?php
        
        $num = $_GET['numero'];
        
        // Este programa suma los 100 numeros indicados en el for al numero que nosotros hemos introducido.
        if(isset($num)) {
            if(num < 0){
                echo "Noooo la cagaste";
            }else{
                for($i=1; $i <= 100; $i++){
                    echo $i, "+" ,$num ,'<br>';
                }
            $i--;   
            echo "La suma es: $i + $num = ";
            $solucion = $i + $num;
            echo $solucion;
                
            } 
        }
        
    ?>
</body>
</html>