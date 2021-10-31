<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    
    $num = $_POST['num'];
    $digito = $_POST['dig'];
    $vuelta = 0;
    $long = 0;
    $pos = 1;
            
            if(!isset($num)){
                echo "No has introducido número alguno";
            }
            // Este if comprueba si el número introducido es 0, lo cual la posicion seria 1. 
            if ($num == 0) {
              $long = 1;
            }
            
            // este bucle while le da la vuelta al número y compueba la longitud del mismo.
            while ($num > 0) {
              $vuelta = ($vuelta * 10) + ($num % 10);
              $num = floor($num / 10);
              $long++;
            }

            // Comprueba la posición del número, si el digito se repite tambien contará su posición.
            while ($vuelta > 0) {
              if (($vuelta % 10) == $digito) {
                echo "<h2>La posición del digito es: ",$pos, '<br></h2>';
              }
              $vuelta = floor($vuelta/10);
              $pos++;  
            }
            
            //Esta ultima línea indica el tamaño del número introducido.
            $pos--;
            echo "<h2>La longitud del número es: ",$pos,'</h2>';
            
    ?>
</body>
</html>