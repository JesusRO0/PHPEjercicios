<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    
    $KB = $_GET['a'];
    
    echo $KB," Kb son ", round($KB / 1024, $precision = 2), " Mb.";

?>
</body>
</html>