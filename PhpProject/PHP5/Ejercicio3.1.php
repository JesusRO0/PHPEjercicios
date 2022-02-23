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
    
    if(!isset($num)){
        $num=0;
        $contador = 0;
    }else{
        
        if($contador == 14){
            $numeroTexto .= "," . $num;
            $numeroTexto = substr($numeroTexto, 2);
            $numero = explode(",", $numeroTexto);
            
            //Recorremos el Array inicial de $numero y lo mostramos.
            echo "Array inicial!<br>";

            foreach ($numero as $num){
                echo " ",$num;
            }
            
            echo "<br><br>";
            
            //Le pasamos al auxiliar el numero numero 14 que será el ultimo número del array.
            $aux = $numero[14];
            
            //Recorremos el Array de $numero nuevamente pero sin el ultimo número.
            echo "Array desplazado!<br>";
            for ($i = 15; $i >= 0; $i--) {
               $numero[$i] = $numero[$i - 1];
            }
            
            //Le devolvemos el último número guardado en el auxiliar el cual será el primero[0] y mostramos el array ya desplazado.
            $numero[0] = $aux;

              for ($i = 0; $i <= 14; $i++) {
                echo " ",$numero[$i]," ";
              }

            }
        }
    
    
    // Pide número y añade el actual a la cadena
    if (($contador < 14) || (!isset($num))) {
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
     
    ?>  
</body>
</html>