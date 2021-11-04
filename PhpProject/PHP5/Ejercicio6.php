<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <h3>Introduce un número.</h3>
    <form action="Ejercicio6.1.php" method="post">
      Número: <input type="number" name="num" autofocus=""><br>
      <input type="hidden" name="cont" value="<?php echo $cont; ?>">
      <input type="hidden" name="par" value="<?= $numeroTexto . " " . $num ?>">
      <input type="submit" value="Buscar">
    </form>
</body>
</html>