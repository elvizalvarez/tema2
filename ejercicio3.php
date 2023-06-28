<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//declaracion de  variables enteras
$x = 10;
$y = 8;

echo " el valor de x es :" . $x . "<br>";
echo "el valor de y es : " .  $y . "<br>";



// Declaración de variables double
$n = 3.14;
$m = 4.718;

echo "El valor de N es: " . $n . "<br>";
echo "El valor de M es: " . $m . "<br>";

//suma
$sumaxy = $x+$y;
echo "la suma de de x and y es: " . $sumaxy . "<br>";

//resta
$resta = $x-$y;
echo "la resta de x and y es: ". $resta . "<br>";

//producto o multiplicacion
$multiplicacion = $x*$y;
echo " el producto de x and y es: " . $multiplicacion . "<br>";

// modulo %
$modulo = $x % $y;
echo " el modulo de x and y es:" . $modulo . "<br>";

// lo mismo para n y m 
//$n = 3.14;$m = 4.718

$suma = $n+$m;
echo "la suma de n y m es: " . $suma . "<br>";

//resta 
$resta = $n-$m;
echo "la resta de n y m es:" .$resta . "<br>";

//producto o multi
$multi = $n * $m;
echo "la multiplicacion de n y m es: " . $multi . "<br>";

//el modulo es %
$modulo = $n % $m;
echo "el modulo de n y m es: " . $modulo . "<br>";

// el doble de cada variable 

$dobleVariable1 = $x * 2;
$dobleVariable2 = $y * 2;
$dobleVariable3 = $n * 2;
$dobleVariable4 = $m * 2;

echo " el doble de x es " . $dobleVariable1 . "<br>";
echo " el doble de y es " . $dobleVariable2 . "<br>";
echo " el doble de n es " . $dobleVariable3 . "<br>";
echo " el doble de m es " .  $dobleVariable4 . "<br>";

//suma de todas las variables 
$sumaxynm = $x + $y + $n + $m;
echo "la sumatoria de las variables es: " . $sumaxynm . "<br>";

//el producto de las todas las variables
$productoxynm = $x * $y * $n * $m;
echo "el producto de las variables es:" . $productoxynm . "<br>";

// calculadora
function calculadora($num1, $num2,$operacion){

switch($operacion){

case 'suma':
    $resultado = $num1 + $num2;
    break;
case 'resta':
    $resultado = $num1 - $num2;
    break;
case 'multiplicacion':
    $resultado = $num1 * $num2;
    break;
case 'division':
    if($num2 !=0){
        $resultado = $num1 / $num2;
    }else{
        $resultado = "no se puedr dividir entre cero";
    }
    break;
    default:
    $resultado = "operacion no es valida las opciones son : + , - , * , / ";
    break;
}
return $resultado;
}
// numeros prueba 
$num1 = 100;
$num2 = 50;

$suma = calculadora($num1 , $num2, 'suma');
echo " el resultado es :" .$suma . "<br>";

$resta = calculadora($num1 , $num2, 'resta');
echo "el resultado es :" . $resta . "<br>";

$multiplicacion = calculadora($num1 , $num2, 'multiplicacion');
echo "el resultado es :" . $multiplicacion . "<br>";

$division = calculadora($num1 , $num2, 'division');
echo "el resultado es :" . $division . "<br>";










































    ?>


</body>
</html>