<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <h3>Fecha Actual, introduce los números referente a los días, meses y años.</h3>
    <form action="#" method="post">
      Día: <input type="number" name="dia" autofocus=""><br>
      Mes: <input type="number" name="mes"><br>
      Año: <input type="number" name="año"><br>
      <input type="submit" value="Buscar"><br><br>
    </form>
    <?php
    
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $año = $_POST['año'];
    
        function mostrarFecha($dia,$mes,$año){
        
    //Selección del Mes
    switch($mes){
        case 1:
           $mes= "Enero";
           break;
        case 2:
          $mes= "Febrero";
          break;
       case 3:
          $mes= "Marzo";
          break;
       case 4:
          $mes= "Abril";
          break;
       case 5:
          $mes= "Mayo";
          break;
       case 6:
          $mes= "Junio";
          break;
       case 7:
          $mes ="Julio";
          break;
       case 8:
          $mes= "Agosto";
          break;
       case 9:
          $mes= "Septiembre";
          break;
       case 10: 
          $mes= "Octubre";
          break;
       case 11:
          $mes= "Noviembre";
          break;
       case 12:
          $mes= "Diciembre";
          break;
     }
     
     //Comprobación del día y su selección
     if($mes == "Enero"){
         if($dia>0 && $dia<32){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";
         }
     }
     if($mes == "Febrero"){
         if($dia>0 && $dia<29){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";     
            }
     }
     if($mes == "Marzo"){
         if($dia>0 && $dia<32){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";  
            }
     }
     if($mes == "Abril"){
         if($dia>0 && $dia<31){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";     
            }
     }
     if($mes == "Mayo"){
         if($dia>0 && $dia<31){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";     
            }
     }
     if($mes == "Junio"){
         if($dia>0 && $dia<31){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";     
            }
     }
     if($mes == "Julio"){
         if($dia>0 && $dia<32){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";     
            }
     }
     if($mes == "Agosto"){
         if($dia>0 && $dia<32){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";     
            }
     }
     if($mes == "Septiembre"){
         if($dia>0 && $dia<31){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";    
            }
     }
     if($mes == "Octubre"){
         if($dia>0 && $dia<32){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";    
            }
     }
     if($mes == "Noviembre"){
         if($dia>0 && $dia<31){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";    
            }
     }if($mes == "Diciembre"){
         if($dia>0 && $dia<31){
             $diaCorrecto = $dia;
         }else{
            echo "Error, Introduce una fecha correcta. <br>";  
            }
     }
    //Salida 
    echo "La fecha de hoy es ", $diaCorrecto," ", $mes," ", $año;
    }
    mostrarFecha($dia,$mes,$año);
    ?>
</body>
</html>