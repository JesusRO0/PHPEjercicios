<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Css/detalles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Short+Stack&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Short+Stack&display=swap" rel="stylesheet"> 
    <title>
        Detalles
    </title>
</head>
<body>
    
    <header>
        <h1>Detalles del producto</h1>
    </header>
<?php

require './conexion.php';

//Esta es la parte de los detelles del producto donde se muestran además de todo lo anterior
// una descripción. También podemos ir a ingresar un producto nuevo.
if(isset($_POST['detalles'])){

    $resultado = $mitienda->query("SELECT nombre,pvp,imagen,descripcion FROM productos Where nombre = '".$_POST['codigo']."';");  
    $producto = $resultado->fetch_object();
     
    if($producto != NULL){


        while($producto != NULL){
            
            echo "<div class='producto'>";
            echo "<div class='imagen'><img width='800' src='data:image/jpg;base64, ".base64_encode($producto->imagen)."'></img></div>";
            echo "<div class='nombre'>$producto->nombre</div>
            <div class='pvp'>$producto->pvp €</div>
            <div class='descripcion'>$producto->descripcion</div>";
            echo "</div>";

            $producto = $resultado->fetch_object();
    }
}else{
    echo "Algo ha salido mal, intentalo de nuevo.";
}

}

?>
    <div class="volver">
    <form action='./view.php' method='post' enctype='multipart/form-data'>

    <input type='submit' name='submit' value='Volver'/> 
    
    </form>
    </div>

    <div class="ingresar">
        <form action="./upload.php" method="post" enctype="multipart/form-data">

        <input type="submit" name="upload" value="Ingresar nuevo producto"/>

        </form>
    </div>

</div>
</body>
</html>