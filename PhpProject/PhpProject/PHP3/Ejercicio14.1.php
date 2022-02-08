<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

    $num = $_GET["a"];
    
    if($num %2 == 0){
        echo "El número $num es PAR.";
    }else{
        echo "El número $num es IMPAR ";
    }
    
    if($num == 1 || $num ==5){
        echo "y es divisible por 5.";
    }
    
?>
</body>
</html>