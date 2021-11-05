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

    $numeroTexto .= "," . $num;
    $numeroTexto = substr($numeroTexto, 2);
    $numero = explode(",", $numeroTexto);
    
        foreach ($numero as $num) {
         if ($num < $minimo) {
           $minimo = $num;
         }else if($num > $maximo){
             $maximo = $num;
        }
        }

        foreach ($numero as $num) {
          if ($num == $minimo) {
            echo $num ," mínimo<br>";
         } else if ($num == $maximo) {
           echo $num, " máximo<br>";
         } else {
           echo $num, "<br>";
         }
        }
    
    // Pide número y añade el actual a la cadena
    if (($contador < 10) || (!isset($num))) {
     ?>
     <form action="#" method="post">
          Introduzca un número:
         <input type="number" name ="num" autofocus>
         <input type="hidden" name="cont" value="<?php echo ++$contador; ?>">
         <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto . "," . $num; ?>">
         <input type="submit" value="OK">
        </form>
    <?php
     }
     echo $contador;
    ?>  
</body>
</html>