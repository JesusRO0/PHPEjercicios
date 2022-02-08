<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        
        $num = $_GET['num'];
        $contador = $_GET['cont'];
        $total = $_GET['total'];
        
        if(isset($num)){
            
            
            //cuando introducimo un número mayor que 0 la variable total almacenará ese numero y se sumará 1 al contador.
            if($num > 0){
                
                $total = $total + $num;
                $contador++;

                
                ?>
                <!--Este formulario se repetira en bucle hasta que nosotros introduzcamos un número menor que 0.-->
                <form action="#" method="get">
                <h1>Añade un número</h1>
                Numero: <input type="number" name="num">
                <input type="hidden" name="total" value="<?php echo $total; ?>">
                <input type="hidden" name="cont" value="<?php echo $contador; ?>">
                <input type="submit" value="Calcular">
                </form> 
    
                <?php
                
                //Cuando el número es menor que 0 calculamos el resultado final y recibimos la media.
            }else{
                
                $resultado = $total/ $contador;
                echo "La media de los números introducidos es: ", $resultado;
            }
        }
        
    ?>
</body>
</html>