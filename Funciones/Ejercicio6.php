<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="post">
    <h1>Añade un número</h1>
    Numero: <input type="number" name="num">
    <input type="submit" value="Calcular"><br><br>
    </form>
    <?php

    if(!isset($num)){
        $num=0;
    }

    function Vuelta(){

    $num = $_POST['num'];

    //Covertimos el numero en un String
    $cadena = strval($num);

    //strrev le da la vuelta a la cadena en cuestión
    $vuelta = strrev($cadena);

    //settype() le cambio el tipo de una variable, en este caso de String a Interger(número entero)
    settype($vuelta,"integer");

    echo "El número introduxido dado la vuelta es: ", $vuelta;
    return $vuelta;
    }

    Vuelta();
    ?>
</body>
</html>