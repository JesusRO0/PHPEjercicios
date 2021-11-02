<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <h3>Introduce un número.</h3>
    <form action="Ejercicio2.1.php" method="post">
      Número: <input type="number" name="num" autofocus=""><br>
      <input type="hidden" name="cont" value="<?php echo $contador; ?>">
      <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $num ?>">
      <input type="submit" value="Buscar">
    </form>
</body>
</html>