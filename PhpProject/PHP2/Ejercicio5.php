<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

    $base = $_GET['a'];
    $altura = $_GET['b'];   

    $area = $base*$altura;
    echo "El area de un rectangulo es $area";
   
?>
</body>
</html>