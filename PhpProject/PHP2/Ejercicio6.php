<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

    $base = $_GET['a'];
    $altura = $_GET['b'];   

    $area = ($base*$altura)/2;
    
    echo "El area de un triangulo es $area";
   
?>
</body>
</html>