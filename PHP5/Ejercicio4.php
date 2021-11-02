<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <?php
    
    $num = $_POST['num'];
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    
    
    for ($i = 0; $i < 100; $i++) {
    $num[$i] = rand(0, 20);
    }
    
    foreach ($num as $mostrar){
        echo $mostrar," ";
    }
    
    ?>
    <h3>Introduce un número.</h3>
    <form action="#" method="post">
      Número: <input type="numer" name="numero1" autofocus=""><br>
      Número 2: <input type="number" name="numero2">
      <input type="submit" value="Dale">
    </form>
    <?php
    
    foreach ($num as $mostrar){
    if($num1 == $num){
        
        $num = $num2;
        
        echo $mostrar;
    }
    }
    
    ?>
</body>
</html>