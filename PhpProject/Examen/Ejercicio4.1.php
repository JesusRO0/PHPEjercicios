<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
        $num = $_POST['num'];
        
        if(isset($num)){
            
        for($i=1;$i<$num;$i++){
            
            //Esto deberia ser los espacios.
            for($h=$i;$h<$i;$h--){
                
                echo "  ","  ";
            
            //Esto la cadena de número ascende
            }for($j=2;$j<$h;$j++){
                
                echo $j;
                
            //Cadena de números descendente   
            }for($k=1;$k<$j;$k--){
                
                echo $k;
            }
        }
        }
        ?>
    </body>
</html>