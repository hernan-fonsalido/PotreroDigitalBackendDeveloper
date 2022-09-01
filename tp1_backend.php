<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonsalido Hernan</title>
</head>
<body>
<p>1.</p> 
<?php
echo "Hola mundo";
?>
<br>
<hr>
<p>2.</p> 
<?php
$saludo ="Hola mundo";
echo "Variable impresa: $saludo";
?>
<br>
<hr>
<p>3.</p> 
<?php
$cincuenta = 50;
$cien = 100;
$suma = $cincuenta + $cien;
echo "Suma: $cien + $cincuenta = $suma";
?>
<br>
<?php
$resta = $cincuenta - $cien;
echo "Resta: $cien - $cincuenta = $resta";
?>
<br>
<?php
$multi = $cincuenta * $cien;
echo "Multiplicación: $cien * $cincuenta = $multi";
?>
<br>
<?php
$div = $cincuenta / $cien;
echo "División entera: $cien / $cincuenta = $div";
?>
<br>
<?php
$resto = $cincuenta % $cien;
echo "Resto de división entera: $cien % $cincuenta = $resto";
?>
<br>
<hr>
<p>4.</p> 
<?php
$celsius = 20;
$farenheit = $celsius * 9/5 + 32;
echo "$celsius °C"
?>
<br>
<?php
echo "$farenheit °F"
?>
<br>
<hr>
<p>5.</p> 
<p>a)Rectángulo</p> 
<?php
$base = 18;
echo "Base: $base cm";
?>
<br>
<?php
$altura = 12;
echo "Altura: $altura cm";
?>
<br>
<?php
$perimetrorec = 2*$base+2*$altura;
echo "Perímetro: $perimetrorec cm";
?>
<br>
<?php
$arearec =$base * $altura;
echo "Área: $arearec cm";
?>
<br>
<br>
<p>b)Círculo</p> 
<?php
$radio = 30;
$pi = 3.14;
echo "Radio: $radio cm";
?>
<br>
<?php
$perimetrocir = 2 * $pi * $radio;
echo "Perímetro: $perimetrocir cm";
?>
<br>
<?php
$areacir = ($pi * ($radio*$radio));
echo "Área del círculo: $areacir cm";
?>
</body>
</html>