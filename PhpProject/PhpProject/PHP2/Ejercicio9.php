<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

    $diametro = $_GET["a"];

    $area = round(pi() * $diametro);
    $radio = $diametro / 2;
    
    echo "El área del círculo es: " . $area . " <br>";
    echo "El radio del círculo es " . $radio . " <br>";

?>
</body>
</html>