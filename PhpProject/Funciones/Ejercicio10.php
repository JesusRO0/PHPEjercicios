<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="post">
    <h1>Añade un número</h1>
    Numero: <input type="num" name="num"><br>
    Números que quitar: <input type="num" name="quitar">
    <input type="submit" value="Calcular">
    </form>
    <?php

    if(!isset($num)){
        $num=0;
        $quitar = 0;
    }
    
    function quitarDelante(){
        
    $num = $_POST['num'];
    $quitar = $_POST['quitar'];
    
    //Convertimos los números en un string
    $cadena = strval($num);
    $cadena2 = strval($quitar);
    
    //ltrim es una funcion que quita los mismos números que nosotros escribamos por $quitar
    //Ejemplo: $num=34257 $quitar=34 $resultado=257
    $resultado = ltrim($cadena,$cadena2);

    //settype() le cambio el tipo de una variable, en este caso de String a Interger(número entero)
    settype($resultado,"integer");

    echo "El resultado es: ",$resultado;
    return $resultado;
    
    }
    quitarDelante();
    ?>
</body>
</html>