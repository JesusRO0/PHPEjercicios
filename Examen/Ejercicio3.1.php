<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
        $num = $_POST['num'];
        $pibote1=0;
        $pibote2=1;
        
        if(isset($num)){
            
            
            //FIBONACCI
            //Usamos un if para sacar los números 0 1
            if($num == 0){
                echo "0 ";
            }elseif($num == 1){
                echo "0 1 ";
            }else{
                echo "0 1 ";
            }
        
        
        //Este for empieza a sacar desde el tercer número de Fibo,
        //con el auxiliar que guarda el número anterior va pasansolo entre los
        //pibotes que seran los que sumen los número siguientes.
        for($i = 2;$i <$num;$i++){
            
            $aux = $pibote1;
            $pibote1 = $pibote2;
            $pibote2 = $aux+$pibote1;
            echo $pibote2, " ";
        }
        
        echo "<br>";
        echo "<br>";
        
        //POTENCIAS
        //Usaremos este for para sacar el exponente el cual sera $j
        //Como sabemos que la base es 2 directamente usamos el número introducido como el tope.
        for($j=1;$j<=$num;$j++){
            
            $exponente = $j;
            echo "2 <sup>",$exponente,"</sup> ";
        }
        
        }else{
            echo "No has introducimo un número";
        }
        ?>
    </body>
</html>