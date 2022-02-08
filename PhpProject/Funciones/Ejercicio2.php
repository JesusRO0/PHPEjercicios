<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    </head>
<body>
    <h3>Introduce un número.</h3>
    <form action="#" method="post">
    Número: <input type="number" name="num">
    <input type="submit" value="Enviar"><br><br>
    </form>
    <?php

    if(!isset($num)){
        $num=0;
    }

    function primo(){

        $num = $_POST['num'];

        if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {

            echo "Es primo ", $num;
            return True;

        } else {

            //comprobamos si es par
            if ($num % 2 != 0) {

                //comprobamos solo por los impares
                for ($i = 3; $i <= sqrt($num); $i += 2) {

                    if ($num % $i == 0) {

                        echo "No es primo ", $num;
                        return false;

                    }

                }
                echo "Es primo ", $num;
                return true;

            }

        }

    }
    
    primo();
    ?>  
</body>
</html>