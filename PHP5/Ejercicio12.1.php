<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <?php
    
    $palabraES = $_POST['palabraES'];

    if(!isset($palabraES)){
        $palabraES = "";
    }else{
        
        
        //Diccionario de bolsillo.
        $diccionario = array(
            "Ordenador" => "Computer",
            "Pizarra" => "blackboard", 
            "Teléfono" => "phone", 
            "Casa" => "house", 
            "Mesa" => "table", 
            "Suelo" => "floor", 
            "Ventana" => "window", 
            "Monitor" => "monitor", 
            "Galleta" => "cookie", 
            "Sombrero" => "hat", 
            "Entrar" => "enter", 
            "Salir" => "exit", 
            "Dormitorio" => "bedroom", 
            "Abuela" => "grandmother", 
            "Alfombrilla" => "mat", 
            "Toalla" => "towel", 
            "Lámpara" => "lamp", 
            "Locura" => "madness", 
            "Amor" => "love", 
            "Código" => "code");
        
        //Le pasamos el array de diccionario a vocabulario que contiene las palabras del diccionario.
        //Mediante otra variable le pasamos el arrya de las palabras.
            
              for($i=0;$i<=5;$i++){
                 $palabraAzar[$i] = $_POST[$i]; 
              }
              
              for($i=0;$i<5;$i++){
                  $palabraAzar[$i] = array_rand($diccionario);
              }
              
              ?>
    
              <form action="Ejercicio12.1.php" method="post">
               <?php $palabraAzar[0]?> <input type="text" name="palabraES0" autofocus=""><br>
               <?php $palabraAzar[1]?> <input type="text" name="palabraES1"><br>
               <?php $palabraAzar[2]?> <input type="text" name="palabraES2"><br>
               <?php $palabraAzar[3]?> <input type="text" name="palabraES3"><br>
               <?php $palabraAzar[4]?> <input type="text" name="palabraES4"><br>
                <input type="submit" value="Traducir">
              </form>
              
              <?php
              
              
            }
    ?>  
</body>
</html>