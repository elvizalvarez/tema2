<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function comprobarGrado($nota){
        if ($nota >=60){
            return "primera division";
        }elseif ($nota >= 45 && $nota <=59){
            return "segunda division";
        }elseif($nota >=33 && $nota <=44){
            return "tercera division";
        }else{
            return "reprobado";
        }
    }
    // datos ejemplo
    $notaEstudiante = 75;
    $gradoEstudiante = verificarGrado($notaEstudiante);
    echo "el grado es : " . $gradoEstudiante;
    
    
    
    
    ?>
</body>
</html>