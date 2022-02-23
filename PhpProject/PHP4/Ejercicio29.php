<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>Introduce un número.</h3>
    <form action="#" method="get">
    Número: <input type="number" name="num">
    Divisor: <input type="number" name="div">
    <input type="submit" value="Enviar">
    </form>
    
    <?php
        $num = $_GET['num'];
        $div = $_GET['div'];
        
        for($i=1;$i<=$num;$i++){
            if($num%$div!==0){
                echo $num;
            }
        }
    ?>
</body>
</html>