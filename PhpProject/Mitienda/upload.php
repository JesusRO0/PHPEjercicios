<?php

require './conexion.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Uploads</title>
    <link href="./Css/upload.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Short+Stack&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Short+Stack&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
        <h1>Ingresar nuevo producto</h1>
    </header>

    <div class="producto">

    <form action="#" method="post" enctype="multipart/form-data">

        <div class="id">
            <label for="id">Id: </label>
            <input type="number" min=0 name="id" required>
        </div>

        <div class="nombre">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" required>
        </div>

        <div class="descripcion">
            <label for="descripcion">Descripcion: </label>
            <textarea name="descripcion" rows="10" columns="100" required></textarea>
        </div>

        <div class="pvp">
            <label for="pvp">Precio: </label>
            <input type="number" step="0.01" name="pvp" required>
        </div>

        <div class="imagen">
            Selecciona una imagen del producto:
            <input type="file" name="image"/>
        </div>

        <div class="boton">
            <input type="submit" name="submit" value="Subir Producto"/>
        </div>
        
    </form>

    </div>

    <?php

    //Cuando se pulsa en ingresar un nuevo producto podemos introducir los datos de él con su imagen
    // y subirlo a la base de datos mitienda.
        if(isset($_POST["submit"])){

            $check = getimagesize($_FILES["image"]["tmp_name"]);

                if($check !== false){
                    $id = $_POST['id'];
                    $nombre = $_POST['nombre'];
                    $descripcion = $_POST['descripcion'];
                    $pvp = $_POST['pvp'];
                    $image = $_FILES['image']['tmp_name'];
                    $miimagen = addslashes(file_get_contents($image));


                    //$resultado = $mitienda->query("INSERT INTO productos VALUES ('2', 'XBOX','LA XBOX MÁS RÁPIDA Y MÁS POTENTE DE LA HISTORIA.','499.99','$miimagen');"); 
                    $resultado = $mitienda->query("INSERT INTO productos VALUES ('$id','$nombre','$descripcion','$pvp','$miimagen');");  

            if($resultado){
                echo "Se ha subido el producto correctamente.";
            }else{
                echo "La subida ha fallado, intentalo de nuevo.";
            }

        }else{
                echo "No se ha seleccionado ninguna imagen.";
        }
    }

    ?>

    <div class="volver">
    <form action="./view.php" method="post" enctype="multipart/form-data">

    <input type="submit" name="submit" value="Volver"/>

    </form>
    </div>

    <footer>
            <div> IES Puertas Del Campo 2ºDAW <br>
                    Alumno: Jesús Roca Obispo
            </div>
    </footer>
</body>
</html>