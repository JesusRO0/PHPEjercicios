<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        
        $num = $_POST['num'];
        $total = $_POST['total'];
        $cant = $_POST['cant'];
       
            
            if($total <= 10000){
                $total += $num;
                $cant++;
                
            }
            if($total >= 10000){
                $cant--;
                $resultado = $total / $cant;
                echo "El total es: ", $total , "<br>";
                echo "La media entre $cant es: ", $resultado;
            }
            
    ?>
    
    <form action="#" method="post">
    Número: <input type="number" name="num">
    <input type="hidden" name="cant" value='<?php echo $cant; ?>'>
    <input type="hidden" name="total" value='<?php echo $total; ?>'>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>