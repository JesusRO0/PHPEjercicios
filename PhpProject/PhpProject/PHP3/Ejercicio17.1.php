<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    
   $num = $_GET['a'];
   
   if($num < 10){
       echo $num;
   }elseif($num >=10 && $num<100){
       $res=($num/10);
       echo $res;
   }elseif($num >=100 && $num<1000){
       $res=($num/100);
       echo $res;
   }elseif($num >=1000 && $num<10000){
       $res=($num/1000);
       echo $res;
   }elseif($num>=10000 && $num<100000){
       $res=($num/10000);
       echo $res;
   }else{
       echo "Error";
   }
    
?>
</body>
</html>