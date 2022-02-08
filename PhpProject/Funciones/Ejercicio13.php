<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="post">
    <h1>Añade un número</h1>
    Numero: <input type="num" name="num"><br>
    <input type="submit" value="Calcular">
    </form>
    <?php

    if(!isset($num)){
        $num=0;
    }

    //Inicializamos las variables, inicio y final quitaran un número.
    $num = $_POST['num'];
    $inicio=1;
    //strlen da la longitud de la cadena
    $final = strlen($num)-2;

    function trozoNumero($num,$inicio,$final){

        //Convertimos num en un String
    $cadena = strval($num);

    //Usamos substr() para quitar los trozos de la cadena
    $resultado = substr($cadena,$inicio);
    $resultadoFinal = substr($resultado,0,$final);

    settype($resultadoFinal,"integer");

    echo "El resultado es: ",$resultadoFinal;
    return $resultadoFinal;

    }
    
    trozoNumero($num,$inicio,$final);
    ?>
</body>
</html>