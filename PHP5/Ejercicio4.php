<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
   <?php
   
    $numeroTexto = $_POST['numeroTexto'];
    $numeroViejo = $_POST['numeroViejo'];
    $numeroNuevo = $_POST['numeroNuevo'];
  
    
    $numeroTexto .= "," . $num;
    $numeroTexto = substr($numeroTexto, 2);
    $num = explode(",", $numeroTexto);
    
    echo "Array Original: <br>";
    
    //Contruimos el array de 100 numeros aleatorios desde 0 al 20 y lo mostramos.
    if(isset($numeroTexto)){
    for ($i = 0; $i < 100; $i++) {
    $num[$i] = rand(0, 20);
    echo $num[$i]," ";
    }
    
    //Formulario que utilizaremos para introducir el número que está en el primer array y 
    //el número por el que vamos a cambiarlo.
    ?>
    <h3>Cambia la cadena de números!!</h3>
    <form action="#" method="post">
      Seleccionar número: <input type="number" name="numeroViejo" autofocus=""><br>
      Número a cambiar: <input type="number" name="numeroNuevo">
      <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto . "," . $num; ?>">
      <input type="submit" value="Dale">
    </form>
    <?php
    echo "<br>Array Cambiado:<br>";
    
    //Recorremos el array cambiando los números, si el numero que introducimos es igual que el que se encuentre 
    //en el array se cambiará por el segundo número introducido. Y si no escribe el número que esta sin más.
    foreach ($num as $numero) {
      if ($numero == $numeroViejo) { 
        echo "<span style=\"color: red; font-weight: bold; font-size: 10;\">$numeroNuevo</span> ";
      } else {
        echo  "$numero ";
      }
    }
    }
    ?>
</body>
</html>