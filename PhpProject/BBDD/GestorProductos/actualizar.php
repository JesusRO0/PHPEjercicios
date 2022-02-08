<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización</title>
    <link href="./css/estilos.css" rel="stylesheet" type="text/css">

</head>
<body>

    <?php

    require './conexion.php';

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $descrip = $_POST['descrip'];
    $pvp = $_POST['pvp'];

    //Realiza la consulta de modificación y volvemos a listado.php.
    $resultado = $dwes->prepare("UPDATE producto SET nombre_corto = '$nombre', descripcion = '$descrip', PVP = $pvp WHERE cod = '$codigo'");  
    $resultado->execute();

    ?>

    <form action="./listado.php" method="post" name="actualizar">

        <input type="hidden" name="act" value="1">

    </form>
    <script>
    
    //Función de javascript para volver a la página.
    window.onload = function ()
    {
        document.forms["actualizar"].submit();
    }

</script>

</body>
</html>