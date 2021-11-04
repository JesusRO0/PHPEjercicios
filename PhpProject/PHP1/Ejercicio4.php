<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <table>
        
        <?php
        $Dia1 = 'Lunes';
        $Dia2 = 'Martes';
        $Dia3 = 'Miercoles';
        $Dia4 = 'Jueves';
        $Dia5 = 'Viernes';
        $Asignatura1 = 'DIW';
        $Asignatura2 = 'DWES';
        $Asignatura3 = 'DAW';
        $Asignatura4 = 'Empresa';
        $Asignatura5 = 'DWEC';
        $hora1 = '8:25<br>9:20';
        $hora2 = '9:20<br>10:15';
        $hora3 = '10:15<br>11:10';
        $hora4 = '11:30<br>12:25';
        $hora5 = '12:25<br>13:20';
        $hora6 = '13:20<br>14:15';
        
        
        echo '<tr><th>------------</th><th>'.$Dia1.'</th><th>'.$Dia2.'</th><th>'.$Dia3.'</th><th>'.$Dia4.'</th><th>'.$Dia5.'</th></tr>';        
        echo '<tr><th>'.$hora1.'</th><th>'.$Asignatura3.'</th><th>'.$Asignatura2.'</th><th>'.$Asignatura2.'</th><th>'.$Asignatura4.'</th><th>'.$Asignatura2.'</th></tr>';
        echo '<tr><th>'.$hora2.'</th><th>'.$Asignatura3.'</th><th>'.$Asignatura2.'</th><th>'.$Asignatura2.'</th><th>'.$Asignatura5.'</th><th>'.$Asignatura2.'</th></tr>';
        echo '<tr><th>'.$hora3.'</th><th>'.$Asignatura5.'</th><th>'.$Asignatura1.'</th><th>'.$Asignatura4.'</th><th>'.$Asignatura5.'</th><th>'.$Asignatura1.'</th></tr>';
        echo '<tr><th>'.$hora4.'</th><th>'.$Asignatura5.'</th><th>'.$Asignatura1.'</th><th>'.$Asignatura3.'</th><th>'.$Asignatura1.'</th><th>'.$Asignatura1.'</th></tr>';
        echo '<tr><th>'.$hora5.'</th><th>'.$Asignatura2.'</th><th>'.$Asignatura5.'</th><th>'.$Asignatura3.'</th><th>'.$Asignatura1.'</th><th>'.$Asignatura4.'</th></tr>';
        echo '<tr><th>'.$hora6.'</th><th>'.$Asignatura2.'</th><th>'.$Asignatura5.'</th><th>'.$Asignatura1.'</th><th>'.$Asignatura3.'</th><th>'.$Asignatura1.'</th></tr>';
        
            
        ?>
    </table>
</body>
</html>