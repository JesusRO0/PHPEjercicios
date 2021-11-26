<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>Introduce la base de un número y el límite de su exponente.</h3>
    <form action="#" method="get">
    Número: <input type="number" name="base">
    Exponente: <input type="number" name="exp">
    <input type="submit" value="Enviar">
    </form>
    
    <?php
        
        $base = $_GET['base'];
        $exp = $_GET['exp'];
        
        // Simplemente guarda el ciclo de la variable $i en el exponente para luego con <sup> añadirselo a la base.
         if (isset($base)) {
             for ($i = 1; $i <= $exp; $i++) {
                 
              $exponente = $i;
              
              echo "$base<sup>$exponente</sup>, ";
              
          } 
        }
    ?>
</body>
</html>