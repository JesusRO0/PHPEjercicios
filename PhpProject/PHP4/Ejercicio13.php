<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        
        $num = $_POST['num'];
        $cant = $_POST['cant'];
        $p = $_POST['p'];
        
        if(!isset($cant)){
            $cant = 0;
        }
        if($cant < 10){
            echo "Hay: ", $p , "positivos <br>";
            echo "Hay: ", $n , "negativos";
        }
        
        if($num >0){
            $p++;
            $cant++;
        }else{
            $n++;
            $cant++;
        }
        
    ?>
    <form action="#" method="post">
        Número: <input type="number" name="num" autofocus="">
    <input type="number" name="cant" value='<?php echo $cant; ?>'>
    <input type="number" name="p" value='<?php echo $p; ?>'>
    <input type="number" name="n" value='<?php echo $n; ?>'>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>