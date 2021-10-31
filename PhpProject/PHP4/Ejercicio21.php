<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="Ejercicio21.1.php" method="post">
    <h1>Añade un número</h1>
    
    <!--Inicializamos los impares aquí para que cuando llegue al buvle de formulario no se rompa el programa.-->
    <?php $impares = 0 ?>
    Numero: <input type="number" name="num">
    <input type="hidden" name="total" value="<?php echo $total; ?>">
    <input type="hidden" name="impares" value="<?php echo $impares; ?>">
    <input type="hidden" name="pares" value="<?php echo $pares; ?>">
    <input type="hidden" name="contimp" value="<?php echo $contimp; ?>">
    <input type="submit" value="Calcular">
    </form> 
</body>
</html>