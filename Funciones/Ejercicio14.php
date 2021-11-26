<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="post">
    <h1>Añade un número</h1>
    Número: <input type="num" name="num"><br>
    Segundo número: <input type="num" name="num2"><br>
    <input type="submit" value="Calcular">
    </form>
    <?php

    if(!isset($num)){
        $num=0;
    }

    function juntaNumero(){

    $num = $_POST['num'];
    $num2 = $_POST['num2'];

    //Convertimos num en un String
    $cadena = strval($num);
    $cadena2 = strval($num2);

    $cadenaFinal = $cadena.$cadena2;

    settype($cadenaFinal,"integer");

    echo "La union es: ",$cadenaFinal;
    return $cadenaFinal;

    }
    
    juntaNumero();
    ?>
</body>
</html>