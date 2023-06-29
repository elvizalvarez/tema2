<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function isBitten()
    {
        $randomNum = rand(0, 1);
        return $randomNum === 0;

    }
    //prueba
    if(isbitten()){
        echo "charlie te mordio el dedo";
    }else{
        echo "charlie no te mordio el dedo";
    }

    
    
    
    
    ?>
</body>
</html>