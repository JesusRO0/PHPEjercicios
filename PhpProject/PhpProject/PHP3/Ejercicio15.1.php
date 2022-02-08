<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

   $res1 = strtolower($_GET['a']);
   $res2 = strtolower($_GET['b']);
   $res3 = strtolower($_GET['c']);
   $res4 = strtolower($_GET['d']);
   $res5 = strtolower($_GET['e']);
   $res6 = strtolower($_GET['f']);
   $res7 = strtolower($_GET['g']);
   $res8 = strtolower($_GET['h']);
   $res9 = strtolower($_GET['i']);
   $res10 = strtolower($_GET['j']);
       
   if($res1 == 'verdadero'){
       $resultado = 3;
   }
   
   if($res2 == 'verdadero'){
       $resultado = 6;
   }
   
   if($res3 == 'verdadero'){
       $resultado = 9;
   }
   
   if($res4 == 'verdadero'){
       $resultado = 12;
   }
   
   if($res5 == 'verdadero'){
       $resultado = 15;
   }
   
   if($res6 == 'verdadero'){
       $resultado = 18;
   }
   
   if($res7 == 'verdadero'){
       $resultado= 21;
   }
   
   if($res8 == 'verdadero'){
       $resultado = 24;
   }
   
   if($res9 == 'verdadero'){
       $resultado = 27;
   }
   
   if($res10 == 'verdadero'){
       $resultado = 30;
   }
   
       
       if($resultado >= 0 && $resultado <=10){
           echo "Puntuación entre 0 y 10: <br> ¡Enhorabuena! tu pareja parece ser totalmente fiel.";
       }elseif($resultado >= 11 && $resultado <= 22){
           echo "Puntuación entre 11 y 22: <br> Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
       }elseif($resultado >= 23 && $resultado <=30){
           echo "Puntuación entre 22 y 30: <br>Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.";
       }else{
           echo "Error.";
       }
   
?>
</body>
</html>