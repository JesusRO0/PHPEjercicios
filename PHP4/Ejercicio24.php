<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>Introduce un número.</h3>
    <form action="#" method="post">
    Número: <input type="number" name="num">
    <input type="submit" value="Enviar">
    </form>
    <?php
        
        $num = $_POST['num'];
        
        for($i=1;$i<=$num;$i++){
            
            //Espacios
            for($h=($num-$i);$h>0;$h--){
                
                echo "&nbsp;&nbsp;";
            }
            //Números ascendentes
            for($k=1;$k<=$i;$k++){
                
                echo $k," ";
            }
            //Números descendentes
            for($j=($i-1);$j>0;$j--){
                
                echo $j," ";
            }
            echo "<br>";
        }
            
    ?>
</body>
</html>