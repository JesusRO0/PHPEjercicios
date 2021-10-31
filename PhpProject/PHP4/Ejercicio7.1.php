<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    
    $num = $_POST['num'];
    $combinacion = $_POST['comb'];
    $oportunidades = $_POST['oport'];
    
    //Si no se indica el número de oportunidades el programa explota.
    if(!isset($oportunidades)){
        $oportunidades = 3;
    }
    //Indica si has introducido un número o no.
    if(!isset($num)){
        echo 'No has introducido ningún número';
    }else{
        
        //Si se escribe un número este se comparará con el premiado, si es así ganas y si no pues resta una oportunidad.
        if($oportunidades > 0){
            if($num == $combinacion){
                echo '<h3>Felicidades, te llevas el premio crack!</h3>';
            }else{
                $oportunidades--;
                echo '<h3>MAL, intentalo de nuevo.</h3>';
            }
        }else{
            echo '<h3>Vaya, te has quedado sin oportunidades mastodonte!</h3>';
        }
    }

    
    
?>
    <!--El formulario que se enviará en bucle.-->
    <form action="#" method="post">
      Número: <input type="number" name="num"><br>
      <input type="hidden" name="comb" value="7777">
      <input type="hidden" name="oport"value='<?php echo $oportunidades;?>'>
      <input type="submit" value="DALEE">
    </form>
    
</body>
</html>