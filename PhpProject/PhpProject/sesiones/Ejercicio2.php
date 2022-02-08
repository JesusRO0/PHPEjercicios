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
    <title>Ejercicio 2: Calcular la media de los impares y el mayor de los pares.</title>
</head>
<body>
    <?php
//Iniciamos la sesión
session_start();
    
    if (session_id() == '') {
            session_start();
            
            $_SESSION['pares'] = 0;
            $_SESSION['contimpares'] = 0;
            $_SESSION['totalimpares'] = 0;
        }

        //Inicializamos las variables
        if(!isset($_POST['boton'])){
            $numero = 0;
            $_SESSION['pares'] = 0;
            $_SESSION['contimpares'] = 0;
            $_SESSION['totalimpares'] = 0;
            
        }else{
            
            $numero = $_POST['numero'];
        }
            //Cuando el número sea mayor o igual que 0 verá si es par o impar.
            if($numero >= 0){   
                
                //Si es par y el número es mayor que par(0 la primera vez) nos quedaremos con ese número.
                if($numero%2==0){
                    if($numero>$pares){

                        $_SESSION['pares'] = $numero;
                    }

                //Si es impar sumamos 1 al contador y sumamos el número al total de impares.
               }else{

                   $_SESSION['contimpares']++;
                   $_SESSION['totalimpares'] = $_SESSION['totalimpares'] + $numero;
               }

            }
        
    ?>
    <h3>Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
en el cómputo. Utiliza sesiones.</h3>
    <form action="#" method="post">
        <label for="numero">Introduce un número positivo</label>
        <input type="number" name="numero" autofocus></br>
        <input type="submit" name="boton" value="Calcular">
    </form>
    <?php
         //Finalmente al introducir un número negativo se mostrará el resultado final.   
        if($numero<0){

            $resultado = $_SESSION['totalimpares']/$_SESSION['contimpares'];
            echo "La media de los números introducidos es: ", $resultado, "<br>";
            echo "El mayor de los pares es: ", $_SESSION['pares'];
            session_destroy();
        }
    ?>
</body>
</html>