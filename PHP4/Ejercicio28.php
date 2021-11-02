<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>Introduce un número para calcular su factorial.</h3>
    <form action="#" method="get">
    Número: <input type="number" name="num">
    <input type="submit" value="Enviar">
    </form>
    
    <?php
        $num = $_GET['num'];
        $aux = $num;
        
        // El bucle mediante un auxiliar que contiene el número que hemos introducido multiplica la variable $i con el el auxiliar.
         if (isset($num)) {
             
             for ($i = 1; $i < $num; $i++) {
                 $aux = $i* $aux;
          } 
        
            echo "El factorial de $num es: ",$aux;
        }

         
    ?>
</body>
</html>