<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    
    $num = $_GET['num'];
    $aux = $num;
    $digito=0;
    
   if(isset($num)){
    while($aux >9){
        $aux = $aux/10;
        $digito++;
    }
   }
   
   echo "<h3>El numero $num tiene $digito digitos.</h3>";
?>    
</body>
</html>