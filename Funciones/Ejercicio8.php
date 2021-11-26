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
    
    function posicionDigito(){
    
    $num = $_POST['num'];
    $encontrar = "2";
    
    //strval convierte un número en una cadena string
    $cadena = strval($num);
    
    //strpos devuelve la posicion de un string, primero el numero y luego el que hay que buscar.
    $ocurrencia = strpos($num, $encontrar);
    
    //Si no encuentra el número devuelve -1, si lo encuentra devuelve la posición
    if ($ocurrencia === false){
        echo -1;
        return -1;
    }else{
        echo "Se ha encontrado una ocurencia y está en la posicion: ", $ocurrencia;
        return $ocurrencia;
    }
    
    }
    
    posicionDigito();
    ?>
</body>
</html>