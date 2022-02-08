<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>Introduce 1 número.</h3>
    <form action="#" method="post">
    Número 1: <input type="number" name="a">
    <input type="submit" value="Enviar">
    </form>
    
    <?php
        
        $num = $_POST['a'];
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
            echo "Es capicuo";
        }else{
            echo "No es capicuo";
        }
        
    ?>
</body>
</html>