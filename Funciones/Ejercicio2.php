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
    
    function esCapicua(){
        
        $num = $_POST['num'];
        $primera_cifra=0;
        $segunda_cifra=0;
        $penultima_cifra=0;
        $ultima_cifra=0;
        
        if($num < 10){
            
        }elseif($num>=10 && $num < 100){
            $primera_cifra = $num/10;
            $primera_cifra = floor($primera_cifra);
            $ultima_cifra = $num%10; 
        }elseif($num >= 100 && $num < 1000){
            $segunda_cifra=$num/100;
            $segunda_cifra= floor($segunda_cifra);
            $segunda_cifra=$segunda_cifra%10;
            $penultima_cifra = floor($penultima_cifra);
            $penultima_cifra = $penultima_cifra%10;
        }elseif($num >= 1000 && $num < 10000){
            $primera_cifra = $num/1000;
            $primera_cifra = floor($primera_cifra);
            $ultima_cifra = $num%10;
        }
        
        if($penultima_cifra == $ultima_cifra && $segunda_cifra == $penultima_cifra){
            echo "es capicua";
        }else{
            echo "no es capicua";
        }
    }
    
    esCapicua();
    
    ?>  
</body>
</html>