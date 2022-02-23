<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="editar.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <title>
        Detalles
    </title>
</head>
<body>
    
<?php

require './conexion.php';
echo '<div class="contenedor">';
echo '<h2>Detalles del producto</h2>';

//Consulta que coge el codigo del producto seleccionado y muestra todo sus detalles.
$resultado = $dwes->prepare("SELECT p.cod, p.nombre, s.nombre_corto, s.pvp, s.descripcion, s.familia FROM familia p INNER JOIN producto s ON s.familia = p.cod WHERE s.cod ='".$_POST['codigo']."';");  
$resultado->execute();

//Recorremos la información la cual podemos modificar cambiando el texto, se enviará al fichero actualizar.php que modificará o no la información.
foreach ($resultado as $registro) {
                
?>
<form action="actualizar.php" method="post">

    <input type="hidden" name="codigo" value="<?php echo $_POST['codigo']; ?>">

    <p>
        <p><label for="nombreProd">Nombre: </label></p>
        <input type="text" size="30" value="<?php echo $registro['nombre_corto'] ?>" name="nombre">
    </p>

    <p>
        <p><label for="descrip">Descripción: </label></p>
        <textarea rows="15" cols="80" name="descrip"> <?php echo $registro['descripcion'] ?> </textarea>
    </p>

    <p>
        <p><label for="pvp">PVP: </label></p>
        <input type="number" step=0.01 name="pvp" value="<?php echo $registro['pvp'] ?>">
    </p>
    
    <input type="submit" name="actualiza" value="Actualizar">
    <a href="./listado.php"><input type="button" name="cancela" value="Cancelar"></a>
   
</form>
<?php

}

?>
</div>
</body>
</html>