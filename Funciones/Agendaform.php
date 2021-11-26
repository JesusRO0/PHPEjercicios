<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <h1>Mi pequeña agenda.</h1>
    <form action="Agenda.php" method="post">
      Nombre:<input type="text" name="nombre" autofocus=""><br>
      Telefono:<input type="number" name="telefono"><br>
      <input type="hidden" name="arrayNombre"><br>
      <input type="hidden" name="arrayTlf"><br>
      <input type="submit" value="Enviar">
    </form>
</body>
</html>