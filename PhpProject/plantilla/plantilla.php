<?php

require './DWES.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Plantilla para Ejercicios Tema 3</title>
  <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="encabezado">
	<h1>Ejercicio: </h1>
	<form id="form_seleccion" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            
            <select name="select"> 
            <?php

            //Recorremos la ocnsulta mostrando los productos en una lista seleccionable.
             foreach ($resultado as $registro) {
  
                echo "<option value='". $registro['cod'] ."'>".$registro['nombre_corto']." ,Tienda: ".$registro['nombre']."</option>";
            }
            
            
            
            ?>
            </select>

            <select name="seleccion">

            <?php

                $consulta = $dwes->prepare('SELECT DISTINCT nombre, cod FROM tienda;');    

                //Ejecutamos la consulta
                $consulta->execute();


                //Recorremos la consulta
                foreach($consulta as $registros){

                    //Mostramos al usuario una de lista de selección de la tienda.
                    echo "<option value='" . $registros['cod'] . "'>" . $registros['nombre'] . "</option>";

                }

            ?>

            </select>
                <input type="number" name="cantidad">
                <input type="submit" value="Enviar" name="Vamono">
            </form>
</div>

<div id="contenido">
	<h2>Contenido</h2>
        <?php
        
        if(isset($_POST['Vamono'])){
          
            set_error_handler("myErrorHandler");
            //Variables que le pasamos por post del formulario
            $tienda = $_POST['seleccion'];
            $cantidad = $_POST['cantidad'];
            $busca = $_POST['select'];

        if($tienda >= 0){

            $consulta = $dwes->query("SELECT unidades FROM stock WHERE tienda = $cantidad AND producto = '$busca'");

            //Recorremos la consulta actualizaondo los productos o añadiendo nuevos según las unidades de la tienda que haya o las que queramos añadir.
            if($consulta->fetch()){

                $consulta = $dwes->query("UPDATE stock SET unidades = $tienda WHERE tienda = $cantidad AND producto = '$busca'");

                echo "La consulta ha sido un éxito, lets' go";

                }else{

                    $consulta = $dwes->query("INSERT INTO stock VALUES ('$busca', $cantidad, $tienda)");

                    echo "La consulta ha sido un éxito, lets' go";

                }

            }else{

                trigger_error("Debes de insertar un valor válido.");

            }
                    
        }

        ?>
        
</div>

<div id="pie">
</div>
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