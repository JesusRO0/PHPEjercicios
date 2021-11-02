<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
        $num = $_POST['num'];
        
        //Comprobamos que el usuario a introducido el número
        if(!isset($num)){
        ?>   
            <h3>Introduce un número</h3>
        <form action="Ejercicio2.php" method="post">
            Número:<input type="number" name="num">
            <input type="submit" value="Enviar">
        </form>
            
        <?php   
        }else{
            
            //Comprobamos si el numero es par usando $num%2==0, y si no es así es primo.
            if($num%2==0){
                
                echo "<h2>No es primo</h2>";
            }else{
                
                echo "<h2>El número " ,$num, " es primo!</h2>";
            }
        }
        
        ?>
    </body>
</html>