<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>Introduce 3 números.</h3>
    <form action="#" method="post">
    Número 1: <input type="number" name="a">
    Número 2: <input type="number" name="b">
    Número 3: <input type="number" name="c">
    <input type="submit" value="Enviar">
    </form>
    
    <?php
        
        $num1 = $_POST['a'];
        $num2 = $_POST['b'];
        $num3 = $_POST['c'];
        $aux;
        
        if($num1<$num2){
            
            $aux=$num1;
            $num1=$num2;
            $num2=$aux;
        }
        
        if($num2<$num3){
            
            $aux=$num2;
            $num2=$num3;
            $num3=$aux;
        }
        
        if($num1<$num2){
            
            $aux=$num1;
            $num1=$num2;
            $num2=$aux;
        }
        
        echo "Los números ordenados son: ", $num1,$num2,$num3;
        
    ?>
</body>
</html>