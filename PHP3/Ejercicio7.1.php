<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

    $nota1 = $_GET["a"];
    $nota2 = $_GET["b"];
    $nota3 = $_GET["c"];
    
    $notaFinal = ($nota1 + $nota2 + $nota3)/3;
    
    echo "La nota media es de:  $notaFinal";

?>
</body>
</html>