<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>Introduce un número</h3>
    <form action="#" method="get">
    Número: <input type="number" name="num">
    <input type="submit" value="Enviar">
    </form>
    
    <?php
        
        $num = $_GET['num'];
        
         if (isset($num)) {

            $pibote1 = 0;
            $pibote2 = 1;
            
            //Creamos un if para asegurarnos los dos primeros números 0 y 1.
            if($num == 0){
                
                echo "0";
                
            }elseif($num == 1){
                
                echo "0 1";
                
            }else{
                
                echo "0 1";
            }
                  
            //Con este bucle for vamos rotando los numeros que se van sumando entre las variables pibote, 
            //con ayuda del auxiliar que se encarga de almacenar el numero anterior.
                for($i=2;$i<$num;$i++){
                    $aux = $pibote1;
                    $pibote1 = $pibote2;
                    $pibote2 = $aux + $pibote2;
                    echo " ",$pibote2;
                }
            }
          
    ?>
</body>
</html>