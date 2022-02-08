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
              
              //La funcion de este if es si en el array la palabra escrita($palabraES) se encuentra en el Array
              //(arrayPalabrasES) entonces la mostramos traducida, y si no pued error.
              if (in_array($palabraES, $arrayPalabrasES)) {
                  
                echo "<h1>La palabra ", $palabraES, " en inglés es: ",$diccionario[$palabraES],"</h1>";
              } else {
                  
                echo "<h2>No has elegido la palabra correcta.</h2>";
              }
            }
     
    ?>  
</body>
</html>