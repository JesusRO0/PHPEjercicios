<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <?php
    
    $num = $_POST['num'];
    $contador = $_POST['cont'];
    $numeroTexto= $_POST['numeroTexto'];
    
    if($contador ==10){
        
        //Concatenar los números del array
        $numeroTexto .= "," . $num;
        $numeroTexto = substr($numeroTexto, 2);
        $numero = explode(",", $numeroTexto);
        
        //Indice
        echo "<table><tr>";
        for($i=0;$i<10;$i++){
            echo "<td>",$i,"</td>";
        }
        echo "</tr><tr>";
        
        //Array normal
        foreach ($numero as $num) {
                echo "<td>",$num,"</td>";
            }
            
        echo "</tr></table>";
        
        //Obtener el primo
        $cuentaPrimos = 0;
        $cuentaNoPrimos = 0;

        for ($i = 0; $i < 10; $i++) {
            
            $esPrimo = true;
            
            if ($esPrimo) {
                
            $primos[$cuentaPrimos] = $numero[$i];
            $cuentaPrimos++;
            }
            
 
        for ($j = 2; $j <$numero[$i]; $j++){
            
            if (($numero[$i] % $j) == 0) {
                
                $esPrimo = False;
                $noPrimos[$cuentaNoPrimos] = $numero[$i];
                $cuentaNoPrimos++;
                }
            }
        }

        for ($i = 0; $i < $cuentaPrimos; $i++) {
            $numero[$i] = $primos[$i];
        }

        for ($i = $cuentaPrimos; $i < $cuentaPrimos + $cuentaNoPrimos; $i++) {
            $numero[$i] = $noPrimos[$i - $cuentaPrimos];
        }
        
    }
    
    
    ?>
    
    <form action="#" method="post">
          Introduzca un número:
         <input type="number" name ="num" autofocus>
         <input type="hidden" name="cont" value="<?php echo ++$contador; ?>">
         <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto . "," . $num; ?>">
         <input type="submit" value="OK">
        </form>
    
</body>
</html>