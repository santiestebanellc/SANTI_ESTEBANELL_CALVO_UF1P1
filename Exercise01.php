<?php

$num1 = rand(1,10);
$num2 = rand(1,10);

$suma = $num1 + $num2;
$resta = $num1 - $num2;

if ($num2 != 0) {
    $division = $num1 / $num2;
} else {
    $division = "No se puede dividir entre 0";
}

echo "num1 = $num1, num2 = $num2<br>";
echo "Suma: $suma<br>";
echo "Resta: $resta<br>";
echo "División: $division<br>";

if ($num1 > $num2) {
    echo "El número mayor es: $num1 y el menor es: $num2<br>";
} elseif ($num1 < $num2) {
    echo "El número mayor es: $num2 y el menor es: $num1<br>";
} else {
    echo "Ambos números son iguales<br>";
}

if ($num1 > 1 && $num2 > 1) {
    $areaTriangulo = ($num1 * $num2) / 2;
    echo "El área del triángulo con base $num1 y altura $num2 es: $areaTriangulo<br>";
} else {
    echo "No se puede calcular el área del triángulo: uno o ambos valores son menores o iguales a 1<br>";
}

