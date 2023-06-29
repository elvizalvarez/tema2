<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function contar( $numero =10, $incremento =1){

        for($i =1; $i <= $numero; $i += $incremento){
            echo $i . "\n";

            //contar hasta 10 en 1-1
            contar ();
            echo "\n";

            //contar hasta 10 en 2-2
            contar (20, 2);


            
            






        }




    }
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>