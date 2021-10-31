<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $num = $_POST['num'];
        $total = $_POST['total'];
        $pares = $_POST['pares'];
        $contimp = $_POST['contimp'];
        $impares = $_POST['impares'];
         
         if (!isset($num)){
             echo "No has introducido ningun número";
         }

            // Si el número es mayor que 0 el total de números se cuenta uno y entramos en otro if.
             if($num > 0){
                 
                 $total++;
                 
                 // Este if indica si el número introducido es par, si es así nos vamos a otro if que indica si el número
                 // introducido es mayor que $pares, si se cumple la introducimos en $pares.
                 // Esto indicará el mayor de la pares.
                 if($num%2==0){
                     if($num>$pares){
                         $pares = $num;
                     }
                      
                     
                     // Si es primo subimos el contador de primos y le sumamos el número introducido a la variable $impar,
                     // esto hará que se vaya acumulando todo los impares introducidos para luego calcularlo.
                 }else{
                     
                     $contimp++;
                     $impares += $num;
                 }
                 
                 ?>
    
                 <!--Este es el formulario que entrará en bucle, le pasamos las variables para que estas no se reseteen-->
                 <form action="#" method="post">
                    <h1>Añade un número</h1>
                    Numero: <input type="number" name="num">
                    <input type="hidden" name="total" value="<?php echo $total; ?>">
                    <input type="hidden" name="impares" value="<?php echo $impares; ?>">
                    <input type="hidden" name="pares" value="<?php echo $pares; ?>">
                    <input type="hidden" name="contimp" value="<?php echo $contimp; ?>">
                    <input type="submit" value="Calcular">
                 </form> 
                 <?php
                 
                 // Si el número que hemos introducido es menor que 0 empezamos a calcular el total de números, el mayor Par y la media de los impares.
             }else{
                 
                 echo "<h3>El total de números es: ", $total, "<br></h3>";
                 echo "<h3>El mayor Par es: ", $pares , "<br></h3>";
                 $resultado = $impares/$contimp;
                 echo "<h3>La media de los impares son: ", $resultado , "<br></h3>";
             }
    ?>
</body>
</html>