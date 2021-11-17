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
        foreach ($diccionario as $vocabulario => $palabra) {
                $arrayPalabrasES[] = $vocabulario;
              }
            
              for($i=0;$i<=5;$i++){
                 $palabraAzar[$i] .= $vocabulario[rand(0, 19)];
                 echo $palabraAzar[$i]," "; 
              }
              
            }
    ?>  
</body>
</html>