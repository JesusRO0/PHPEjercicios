<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <table>
        
        <?php
        $Coche = 'coche';
        $Casa = 'casa';
        $Silla = 'silla';
        $Mesa = 'mesa';
        $Arriba = 'arriba';
        
        echo '<tr><th>Español</th><th>Ingles</th></tr>';
        
        echo '<tr>'.'<th>'.$Coche.'</th><th>CAR</th></tr>';
        echo '<tr><th>'.$Casa.'</th><th>HOUSE</th></tr>';
        echo '<tr><th>'.$Silla.'</th><th>CHAIR</th></tr>';
        echo '<tr><th>'.$Mesa.'</th><th>TABLE</th></tr>';
        echo '<tr><th>'.$Arriba.'</th><th>UP</th></tr>';
            
        ?>
    </table>
</body>
</html>