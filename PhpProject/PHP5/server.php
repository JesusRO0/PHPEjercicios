<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <h3>Contenido de $_Server</h3>
    <?php
    
    $server = $_SERVER;
    echo "<table><tr>";
    
    foreach ($server as $servidor => $valor){
        
        echo "<td>",$servidor, "</td></tr><tr><td>",$valor,"</td>";

    }
    echo "</tr></table>";
    
    ?>
</body>
</html>