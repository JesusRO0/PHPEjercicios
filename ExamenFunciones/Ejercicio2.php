<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <form action="#" method="post">
    Introduzca un número Binario: <input type="number" name ="numBi" autofocus>
    Introduzca un número Decimal: <input type="number" name ="numDe" autofocus>
    <input type="submit" value="OK">
    </form>
    
    <?php
    $numBi = $_POST['numBi'];
    $numDe = $_POST['numDe'];

    //repetir las veces como el rango de los números introducidos 
        for($i=0;$i<$numBi.Length;$i++){
            $numBinario = $numBi * (2* count($numBi-1));
            echo $numBi;
        }
        
        for($j=0;$j<$numDe.Length;$j++){
            
            $numDecimal = $numDe%2==0;
            echo $numeroDecimal;
        }
            
        
        

    
    
    ?>
</body>
</html>