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
            
            
            ?>
            <form action="#" method="post">
                Número Inicial:<input type="number" name ="inicial" autofocus=""><br>
              Número Final:<input type="number" name ="final" autofocus="">
              <input type="hidden" name="cont" value="<?php echo $contador; ?>">
              <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto . "," . $num; ?>">
              <input type="submit" value="Enviar">
             </form>
            <?php
          
            $inicial = $_POST['inicial'];
            $final = $_POST['final'];
            
            if($inicial<$final && $inicial>0 && $inicial<10 && $final>0 && $final<10){
                
               $aux = $numero[0];
               $inicial = $aux;
               
               $aux2 = $numero[9];
               $inicial = $aux2; 
                
               for ($i = 10; $i >= 0; $i--) {
                   $numero[$i] = $numero[$i - 1];
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
}
    // Pide número y añade el actual a la cadena
    if (($contador < 10) || (!isset($num))) {
     ?>
    <br><form action="#" method="post">
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