<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once './conexion.php';


//$dwes->query('SELECT producto, unidades FROM stock',
//MYSQLI_USE_RESULT);

//$resultado2 = $dwes->query('UPDATE stock SET unidades=1 WHERE producto="3DSNG" AND tienda=1;');
//$resultado3 = $dwes->query('INSERT INTO stock VALUES("3DSNG",3,1);');
//$resultado4 = $dwes->query('SELECT s.producto, s.unidades, t.nombre FROM stock s, tienda t WHERE producto="3DSNG" AND s.tienda = t.cod;');
//$resultado = $dwes->query('SELECT p.nombre_corto, s.unidades, t.nombre FROM producto p INNER JOIN stock s ON s.producto = p.cod INNER JOIN tienda t ON t.cod = s.tienda');
//$stock = $resultado->fetch_object();

/*$registros = $dwes->exec('INSERT INTO stock VALUES("PAPYRE62GB",2,1);');
print "<p>Se han insertado $registros registro.</p>";*/

/*$registro2 = $dwes->exec('UPDATE stock SET unidades=1 WHERE producto="PAPYRE62GB" AND tienda=1;');
print "<p>Se han cambiado $registro2 unidad a la tienda 1.</p>";*/

$resultado = $dwes->prepare('SELECT p.nombre_corto, s.unidades, t.nombre, p.cod FROM producto p INNER JOIN stock s ON s.producto = p.cod INNER JOIN tienda t ON t.cod = s.tienda');
$resultado->execute();
//while ($stock != null) {
    
//print "<p>Producto $stock->nombre_corto: $stock->unidades unidades, nombre de la tienda: $stock->nombre </p>";
//$stock = $resultado->fetch_object();

//}

//$dwes->close();
