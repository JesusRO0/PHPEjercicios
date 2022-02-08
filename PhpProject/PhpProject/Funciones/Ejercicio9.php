<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="#" method="post">
    <h1>Añade un número</h1>
    Numero: <input type="num" name="num"><br>
    Números que quitar (números negativos): <input type="num" name="quitar">
    <input type="submit" value="Calcular">
    </form>
    <?php
    
    function quitarDetras(){
        
    if(!isset($num)){
        $num=0;
        $quitar = -1;
    }
    
    $num = $_POST['num'];
    $quitar = $_POST['quitar'];


    //Convertimos el número en un String
    $cadena = strval($num);
    
    //Usamos la función substr($cadena,posicion donde quitar, $la cantidad que quitar)
    $resultado= substr($cadena,0, $quitar);
    
    //Si quitamos todos los numeros y nos devuelve una cadena vacia nos da error, y si no pues muestra el número resultante.
    if($resultado === ""){
        echo "<br>Error: Has quitado todos los números.";
    }else{
        settype($resultado,"integer");
        echo "<br>El número restante es: ",$resultado;
        return $resultado;
    }
    
    }
    quitarDetras();
    ?>
</body>
</html>