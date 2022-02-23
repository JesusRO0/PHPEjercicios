<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once './conexion.php';

/*Consultas*/

$registros = $dwes->exec('INSERT INTO stock VALUES("PAPYRE62GB",2,1);');
print "<p>Se han insertado $registros registro.</p>";

$registro2 = $dwes->exec('UPDATE stock SET unidades=1 WHERE producto="PAPYRE62GB" AND tienda=1;');
print "<p>Se han cambiado $registro2 unidad a la tienda 1.</p>";

$resultado = $dwes->query("SELECT * FROM stock WHERE producto='PAPYRE62GB'");

/*Recorremos la consulta */
while ($registro = $resultado->fetch()) {
echo "Producto ".$registro['producto'].": ,Teinda:".$registro['tienda']." ,Unidades".$registro['unidades']."<br />";
}

?>