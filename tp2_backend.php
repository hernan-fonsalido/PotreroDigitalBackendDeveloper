<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonsalido Hernan</title>
</head>
<body>
<h1>Ejercicios TP2</h1>
<hr><p>1.</p> 
<?php
$a = 5;
if ($a < 0) {
echo "$a NO ES un número POSITIVO <br>";
}
elseif ($a > 0) {
    echo "$a ES un número POSITVO <br>";
} 
else {
echo "La variable es 0";
}
?>
<hr>
<p>2.</p> 
<?php
$b = 8;
if ($b > 1 & $b < 10) {
    echo "$b ES mayor que 1 y menor que 10";
}
else {
    echo "$b NO es mayor que 1 y menor que 10";
}
?>
<br><hr>
<p>3.</p> 
<?php
$c = 1;
if ($c > 10 or $c < 2) {
   echo "$c ES mayor que 10 o menor que 2";
}
else {
    echo "$c NO es mayor que 10 o menor que 2";
}
?>
<br><hr>
<p>4.</p> 
<?php
$numero1 = 4;
$numero2 = 3;
echo "Número 1 = $numero1 <br> Número 2 = $numero2 <br>";
if ($numero1 > $numero2) {
    echo "Suma:".($numero1 + $numero2)."<br>Resta:".($numero1 - $numero2);
} 
elseif ($numero2 > $numero1) {
    echo "Multiplicación:".($numero1 * $numero2)."<br>División entera:".($numero1 / $numero2)."<br>Resto de la división:".($numero1 & $numero2);
} 
else {
    echo "Los números ingresados son iguales";
}
?>
</body>
</html>