<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
        $num = $_POST['num'];
        $num2 = 0;
        $num3 = 0;
        $num4 = 0;
        $num5 = 0;
        
        if(isset($num)){
            
            //El caso es ir quedandote con el digito y ordenarlo en las variables.
            if($num >=0 || $num <= 9){
                $num5 = $num;
            }elseif($num >= 10 || $num <= 99){
                $num = $num%10;
                $num4 = $num;
            }elseif($num >= 100 || $num <= 999){
                $num = $num%100;
                $num3 = $num;
            }elseif($num >= 1000 || $num <= 9999){
                $num = $num%1000;
                $num2 = $num;
            }
        }
        
       /* if($num==$num5){
            echo $num5;
        }*/
        
        echo $num5,$num4,$num3,$num2;
        
        ?>
    </body>
</html>