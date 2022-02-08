<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <?php
        if (!empty($_POST['telefono']) && !empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $arrayNombre = $_POST['arrayNombre'];
        $arrayTlf = $_POST['arrayTlf'];

        $arrayNombre .= "," . $nombre;
        $arrayTlf .= "," . $telefono;
        //$arrayNombre = substr($arrayNombre, 2);
        //$arrayTlf = substr($arrayTlf, 2);
        $arrayNombre = explode(",", $arrayNombre);
        $arrayTlf = explode(",", $arrayTlf);
        
        $agendaNombre = $arrayNombre;
        $agendaTlf = $arrayTlf;

        echo "<table><tr><td>Nombre</td><td>Teléfono</td></tr>";

        for($i=0;$i<count($agendaNombre);$i++){

            echo "<tr><td>". $arrayNombre[$i]."</td><td>".$agendaTlf[$i]."</td></tr>";
        }
        echo "</table>";
        ?>
        <br>
        <form action="#" method="post">
        Nombre:<input type="text" name="nombre" autofocus=""><br>
        Telefono:<input type="number" name="telefono"><br>
        <input type="hidden" name="arrayNombre" value="<?php echo $arrayNombre . "," . $nombre; ?>"><br>
        <input type="hidden" name="arrayTlf" value="<?php echo $arrayTlf . "," . $telefono; ?>">
        <input type="submit" value="Enviar">
        </form>
        <?php
        
        
        //Si no se introduce el nombre ni el tlf entramos en la validación
        }else{ 
        ?>
        <form name="input" action="#" method="post">
        Nombre:
        <input type="text" name="nombre" />
        
        <?php
        //Si pulsamos en enviar y el nombre está vacio, volvemos a enviar el input e indicamos un error
        if (isset($_POST['enviar']) && empty($_POST['nombre'])){
        echo "<span style='color:red'> Debe introducir un nombre!</span>";
        }  
        ?>
        
        <br>
        Teléfono:  
        <input type="number" name="telefono" value="<?php echo $_POST['telefono'];?>"/>
        <input type="hidden" name="arrayNombre" <?php echo $arrayNombre . "," . $nombre; ?>"><br>
        <input type="hidden" name="arrayTlf" <?php echo $arrayTlf . "," . $telefono; ?>"><br>       
        <br><br>
        <input type="submit" value="Enviar" name="enviar"/>
        </form>

    <?php
    } 
    
    ?>
</body>
</html>