<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    $dia = strtolower($_POST['a']);
    
    switch($dia){
        case 'lunes';
            echo "DAW";
            break;
        
        case 'martes';
            echo "DWES";
            break;
        case 'miercoles';
            echo "DWES";
            break;
        
        case 'jueves';
            echo "Empresa";
            break;
        
        case 'viernes';
            echo "DWES";
            break;   
        
        default: echo "Error";
            break;
        }
?>
</body>
</html>