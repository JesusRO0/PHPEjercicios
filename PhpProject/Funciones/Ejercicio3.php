<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <h3>Introduce un número.</h3>
    <form action="#" method="post">
    Número: <input type="number" name="num">
    <input type="submit" value="Enviar">
    </form>
    <?php
    
    function siguientePrimo($num){
        
        $num = $_POST['num'];
        $candidato = $num;
        $es_primo=true;
        $primo=0;
        
        while($primo==0){
            $candidato++;
            for($i=2;$i<$candidato;$i++){
                if(($candidato%$i)==0){
                    $es_primo=false;
                }
            }
            
            
            if($es_primo==true){
                $primo=$candidato;
            }else{
                $es_primo=true;
            }
        }
        echo $primo;
    }
    
    siguientePrimo();
    
    ?>  
</body>
</html>