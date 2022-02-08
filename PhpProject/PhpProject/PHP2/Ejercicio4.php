<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    echo "La suma de $a mas $b es ", $a + $b.'<br>';
    echo "La resta de $a menos $b es ", $a - $b.'<br>';
    echo "La multiplicación de $a por $b es ", $a * $b.'<br>';
    echo "La división de $a entre $b es ", $a / $b.'<br>';
?>
</body>
</html>