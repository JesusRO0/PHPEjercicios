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
    
   for($i=0;$i<10;$i++){
       $resultado = $num*$num + $num*$num;
   }
       if($resultado == 1){
           "El número es feliz";
       }elseif($resultado !== 1){
           "El número no es feliz";
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