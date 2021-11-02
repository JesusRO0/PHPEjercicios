<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <h3>Introduce un número.</h3>
    <form action="Ejercicio3.1.php" method="post">
      Número: <input type="number" name="num" autofocus=""><br>
      <input type="hidden" name="array" value="<?php echo ",";?>">
      <input type="submit" value="Buscar">
    </form>
</body>
</html>