<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="post">
    <h1>Añade un número</h1>
    Numero: <input type="num" name="num"><br>
    Números que añadir: <input type="num" name="añadir">
    <input type="submit" value="Calcular">
    </form>
    <?php

    if(!isset($num)){
        $num=0;
        $añadir = 0;
    }
    
    function pegarDelante(){
        
    $num = $_POST['num'];
    $añadir = $_POST['añadir'];
    
    //Convertimos los número en cadenas String
    $cadena = strval($num);
    $cadena2 = strval($añadir);

    //Las concatenamos como una cadena normal
    $numeroFinal= $cadena2.$cadena;

    //Luego lo convertimos a número entero. settype() cambia el tipo de una variable, en este caso de String a Interger(número entero)
    settype($numeroFinal,"integer");

    echo "La union es: ",$numeroFinal;
    return $numeroFinal;

    }
    pegarDelante();
    ?>
</body>
</html>