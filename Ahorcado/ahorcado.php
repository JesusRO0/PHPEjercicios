<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <h1>Juego del Ahorcado</h1>
    <?php
    
    $palabra = $_POST['palabra'];
    $oportunidades = $_POST['oport'];
    
    if(!isset($palabras)){
        $oportunidades = 5;
        $palabra = "";
        
    }
    
    if(is_string($palabra)){
    
    $palabrasCorrectas = array(
            "Ordenador",
            "Pizarra", 
            "Telefono", 
            "Casa", 
            "Mesa", 
            "Suelo", 
            "Ventana", 
            "Monitor", 
            "Galleta", 
            "Sombrero", 
            "Entrar", 
            "Salir", 
            "Dormitorio", 
            "Abuela", 
            "Alfombrilla", 
            "Toalla", 
            "Lampara", 
            "Locura", 
            "Amor", 
            "Codigo");

    $palabraSeleccionada = $palabrasCorrectas[rand(0, 20)];
    echo $palabraSeleccionada;
    
    if($oportunidades > 0){
            if(in_array($palabra, $palabrasCorrectas)){
                echo '<h3>Felicidades, has ganado!</h3>';
            }else{
                $oportunidades--;
                echo '<h3>MAL, intentalo de nuevo.</h3>';

            }
        }else{
            echo '<h3>Vaya, te has quedado sin oportunidades mastodonte!</h3>';
        }
    
    
    
    }else{
        echo "No has introducido una palabra o letra";
    }
    
    
    ?>
    <form action="#" method="post">
      Palabra o letra: <input type="text" name="palabra" autofocus=""><br>
        <input type="hidden" name="oport" value="<?php echo $oportunidades; ?>">
        <input type="hidden" name="oport" value="<?php echo $palabraSeleccionada; ?>">
      <input type="submit" value="Buscar">
    </form>
</body>
</html>