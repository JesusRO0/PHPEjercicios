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
        
        $num = $num%10;
        
        echo  $num;
        
    ?>
</body>
</html>