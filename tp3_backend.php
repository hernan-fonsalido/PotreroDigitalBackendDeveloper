<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonsalido Hernan</title>
</head>
<body>
<h1>Ejercicios TP3</h1>
<hr><p>Ejercicio 1.</p> 
<?php
$i=1;
while ($i <= 100) {
    print "<p>$i</p>\n";
    $i++;
}
?>
<br><hr><br>
<p>Ejercicio 2.</p> 
<?php
$i=100;
while ($i >= 1) {
    print "<p>$i</p>\n";
    $i--;
}
?>
<br><hr><br>
<p>Ejercicio 3.</p> 
<?php

for ($i=2 ; $i<101 ; $i=$i+2 ) {
    print "<p>$i</p>\n";
}
?>
<br><hr><br>
<p>Ejercicio 4.</p> 
<?php

for ($i=1 ; $i<101 ; $i=$i+2 ) {
    print "<p>$i</p>\n";
}
?>
<br><hr><br>
<p>Ejercicio 5.</p> 
<?php
$suma = 0;

for ($i=0 ; $i<21 ; $i++ ) {
    echo "la suma de los numeros es : $suma + $i=", $suma+$i, "<br>";
    $suma += $i;
}
print "El resultado de la suma total de los numeros del 1 a 20 es: $suma";
?>
<br><hr><br>
<p>Ejercicio 6.</p> 
<?php
$suma = 0;

for ($i=0 ; $i<21 ; $i=$i+2 ) {
    echo "la suma de los numeros es : $suma + $i=", $suma+$i, "<br>";
    $suma += $i;
}
print "El resultado de la suma de los numeros pares del 1 a 20 es: $suma";
?>
</body>
</html>