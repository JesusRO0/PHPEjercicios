<?php

require './conexion.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Plantilla para Ejercicios Tema 3</title>
    <link href="./Css/view.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Short+Stack&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Short+Stack&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
        <h1>DWES' SHOP</h1>
        <h2>Welcome!</h2>
    </header>
    <?php

    //Catálogo de la tienda, muestra todos los productos y puedes ver Detalles o comprarlos.
    $resultado = $mitienda->query("SELECT nombre,pvp,imagen FROM productos;");  
    $registro = $resultado->fetch_object();
     
    if($registro != NULL){

    echo "<div class='catalogo'>";

        while($registro != NULL){
            
            echo "<div class='producto'>";

            echo "<div class='imagen'><img width='350' src='data:image/jpg;base64, ".base64_encode($registro->imagen)."'></img></div>";
            
            echo "<div class='nombre'>$registro->nombre</div>
            <div class='precio'>$registro->pvp €</div>";

            echo "<form action='./detalles.php' method='post' enctype='multipart/form-data'>
            <input type='hidden' value='".$registro->nombre. "' name='codigo'>
            <input type='submit' name='detalles' value='Detalles'/>
            </form>";

            echo "<form action='#' method='post' enctype='multipart/form-data'>
            <input type='hidden' value='".$registro->nombre."' name='name'>
            <input type='submit' name='comprar' value='Comprar'/>
            </form>";

            echo "</div>";

            $registro = $resultado->fetch_object();
    }
}else{
    echo "Algo ha salido mal, intentalo de nuevo.";
}

    ?>
    <div class="cesta">
        <h3>Mi Cesta</h3>
    <?php

    //Apartado de mi cesta, falta las unidades, acumular productos y el precio.
    //Cuando pulsamos en comprar realizamos una consulta que muestra el producto mediuante su nombre.
        if(isset($_POST['comprar'])){

        $resultado = $mitienda->query("SELECT nombre,pvp,imagen,descripcion FROM productos Where nombre = '".$_POST['name']."';");  
        $producto = $resultado->fetch_object();
        
        if($producto != NULL){

            while($producto != NULL){
                
                echo "<div class='producto'>";
                echo "<div class='imagen'><img width='200' src='data:image/jpg;base64, ".base64_encode($producto->imagen)."'></img></div>";
                echo "<div class='nombre'>$producto->nombre</div>
                <div class='precio'>$producto->pvp €</div>";
                echo "<form action='#' method='post' enctype='multipart/form-data'>
                <input type='submit' name='eliminar' value='Eliminar'/>
                </form>";
                echo "</div>";

                $producto = $resultado->fetch_object();
        }
        }else{
        echo "Algo ha salido mal, intentalo de nuevo.";
        }

        }
    ?>
    </div>
    <div class="nuevoProducto">
    <form action="./upload.php" method="post" enctype="multipart/form-data">

    <input type="submit" name="ingresar" value="Ingresar un nuevo producto"/>

    </form>
    </div>
    </div> 

    <footer>
            <div> IES Puertas Del Campo 2ºDAW <br>
                    Alumno: Jesús Roca Obispo
            </div>
    </footer>
</body>
</html>