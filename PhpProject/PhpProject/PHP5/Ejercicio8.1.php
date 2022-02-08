<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <?php
    
    $num = $_POST['num'];
    $contador = $_POST['cont'];
    $numeroTexto = $_POST['numeroTexto'];
    
    //Sale mal
    
     if(!isset($num)){
        $num=0;
        $numeroTexto="";
        $cont=0;
    } 
    
        if($contador == 9){
            
            $numeroTexto .= "," . $num;
            $numeroTexto = substr($numeroTexto, 2);
            $numero = explode(",", $numeroTexto);
            
            //Primero mostramos el array original de los 10 números introducidos con su índice.
            echo "<th>The original Array</th><br><br>";
            echo "<table><tr>";
            
            for ($i = 0; $i < 10; $i++) {
              echo "<td>$i</td>";
            }
            
            echo "</tr><tr>";
            
            foreach($numero as $num){
                echo "<td>$num</td>";
            }
            
            echo "</table></tr><br>";
            
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
            
            echo "<th>El Array modificado</th><br><br>";
            echo "<table><tr>";

            for ($i = 0; $i < 10; $i++) {
              echo "<td>$i</td>";
            }
            
            echo "</tr><tr>";
            
            foreach($numero as $num){
                echo "<td>$num</td>";
            }
            
            echo "</table></tr><br>";
            

}
    // Pide número y añade el actual a la cadena
    if (($contador < 10) || (!isset($num))) {
     ?>
     <form action="#" method="post">
      Número:<input type="number" name ="num" autofocus="">
      <input type="hidden" name="cont" value="<?php echo ++$contador; ?>">
      <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto . "," . $num; ?>">
      <input type="submit" value="Enviar">
    </form>
    <?php
    }
    
    ?>
</body>
</html>