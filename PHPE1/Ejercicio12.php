<?php

//echo '*********<br>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>*&nbsp;&nbsp;&nbsp;&nbsp;*<br>*&nbsp;&nbsp;&nbsp;*<br>*';

for($x=0;$x<=9;$x++){
    $s = $x;
    while($s>0){
        echo "&nbsp;";
        $s--;
    }
  for($y=0;$y<=9-$x;$y++){
    if($x==0 || $x==9){
        echo "*";
    }else{
        if($y==0||$y==9-$x){
            echo "*";
        }else{
        echo "&nbsp;&nbsp;";
        }
    }
    }echo "<br>";
}

?>


