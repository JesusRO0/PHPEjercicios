<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1: Calcular la media.</title>
</head>
<body>
    <?php
    
    session_start();
    
    if (session_id() == '') {
            session_start();
            
            $_SESSION['cont'] = 0;
            $_SESSION['total'] = 0;
        }

        if(!isset($_POST['numero'])){
            $numero = 0;
            $_SESSION['cont'] = -1;
            $_SESSION['total'] = 0;
        }else{
            $numero = $_POST['numero'];
        }
                        
     if($numero >= 0){
             
        $_SESSION['total'] = $_SESSION['total'] + $numero;
        $_SESSION['cont']++;
        
        echo $_SESSION['cont'];
        
                 
    ?>
    <form action="#" method="post">
        <label for="numero">Introduce un número positivo</label>
        <input type="number" name="numero" autofocus=""></br>
        <input type="submit" value="Calcular">
    </form>
    <?php
            
     }else{
                
            $resultado = $_SESSION['total']/$_SESSION['cont'];
            echo "La media de los números introducidos es: ", $resultado;
            session_destroy();
     }
     
    ?>
</body>
</html>