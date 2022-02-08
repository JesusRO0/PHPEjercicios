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
    <link href="dwes.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">  
</head>

<body>

    <div id="encabezado">
        <h1>DWES - Tarea del Tema 3 - Gestor de Productos </h1>
        <h3>Selecciona un tipo de producto: </h3>
        <form id="form_seleccion" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                
                <select name="select"> 
                <?php

                //Creamos la consulta para el listado de la familia de los productos y la ejecutamos.
                $resultado = $dwes->prepare('SELECT DISTINCT p.cod, p.nombre FROM familia p INNER JOIN producto s ON s.familia = p.cod');
                $resultado->execute(); 

                //Recorremos y mostramos los resultados.
                foreach ($resultado as $registro) {
                    
                    echo "<option value='". $registro['cod'] ."'>"."".$registro['nombre']."</option>";
                }
                
                ?>

                </select>
                    <input type="submit" value="Mostrar" name="Vamono">
                </form>
    </div>

    <div id="contenido">
        <h2>Productos</h2>
            <?php
            
            if(isset($_POST['Vamono'])){
            
                set_error_handler("myErrorHandler");
                $busca = $_POST['select'];
                
            //Consulta preparada con PDO, muestra los productos de la familia seleccionada.
            $resultado2 = $dwes->prepare("SELECT p.nombre_corto, p.pvp, p.cod FROM producto p INNER JOIN familia f ON f.cod = p.familia WHERE p.familia = '$busca'");  
            $resultado2->execute();
            
            //Recorremos y mostramos los resultados, por cada producto habrá un boton "editar" que lo enviará al editar.php.
            foreach ($resultado2 as $registro2) {
                    
                print "<form action='editar.php' method='post'>"
                . "<p>ID: ".$registro2['nombre_corto']. " Precio: ".$registro2['pvp']."$ "
                . "<input type='hidden' value='".$registro2['cod']. "' name='codigo'>"
                . "<input type='submit' value='editar' name='editar'></p>"
                . "</form>";
            }
            }

            ?>
            
    </div>

    <div id="pie">
    </div>
    <footer>
            <div> IES Puertas Del Campo 2ºDAW <br>
                    Alumno: Jesús Roca Obispo
            </div>
    </footer>
</body>
</html>
<?php

        // Creamos la función para el control de excepciones y ver los errores
        function myErrorHandler($errno, $errstr, $errfile, $errline) {
           /* $errno muestra el "nivel" del error el cual se indica con un número (integer),
            * el segundo parámetro, $errstr, contiene el mensaje de error, como cadena,
            * el tercer parámetro es opcional, $errfile, que contiene el nombre de archivo que ocasionó el error, como cadena,
            * El cuarto parámetro es opcional, $errline, que contiene el número de línea donde ocurrió el error, como valor de tipo integer.
           */
            echo "<b>Error personalizado:</b> [$errno] $errstr<br>";
            echo " Error en la línea $errline en $errfile<br>";
        }


?>