<!DOCTYPE html>

    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <?php
    
    $num = $_POST['num'];
    $cont = $_POST['cont'];
    $numeroTexto = $_POST['numeroTexto'];
    $numeroTexto1 = $_POST['numeroTexto1'];

    
    if (!isset($num)) {
        $cont = 0;
        $par = "";
        $impar = "";
        }

    if($num > 0){
        $cont++;
        
        if($num%2==0){
            $par=$num;
            $numeroTexto = $numeroTexto . " " . $par;
            $numeroTexto = substr($numeroTexto, 2); 

            $numeropar = explode(" ", $numeroTexto);
            if($cont==8){
            foreach ($numeropar as $par){
            echo "<span style=\"color: green; font-weight: bold;\">$par</span>","  ";
            }
            }
            
        }else{
            $impar=$num;
            $numeroTexto1 = $numeroTexto1 . " " . $impar;
            $numeroTexto1 = substr($numeroTexto1, 2); 

            $numeroimpar = explode(" ", $numeroTexto1);
            if($cont==8){
            foreach ($numeroimpar as $impar){
            echo "<span style=\"color: red; font-weight: bold;\">$impar</span>","  ";
            }
        }
        }
        
    ?>
    <h3>Introduce un número.</h3>
    <form action="#" method="post">
      Número: <input type="number" name="num" autofocus=""><br>
      <input type="number" name="cont" value="<?php echo $cont; ?>">
      <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $num ?>">
      <input type="hidden" name="numeroTexto1" value="<?= $numeroTexto1 . " " . $num ?>">
      <input type="submit" value="Buscar">
    </form>
        
    <?php
    }
    ?>
</body>
</html>