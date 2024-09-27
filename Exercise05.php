<?php

$suma = 0;
$total_pares = 0;
$total_impares = 0;
$contador = 0;

echo "Números generados:<br>";
do {

    $numero = rand(0, 20);
    
    echo "$numero ";

    $suma += $numero;

    if ($numero % 2 == 0) {
        $total_pares++;
    } else {
        $total_impares++;
    }

    $contador++;

} while ($suma <= 100);

echo "<br><br>Suma total: $suma<br>";
echo "Números generados: $contador<br>";
echo "Números pares: $total_pares<br>";
echo "Números impares: $total_impares<br>";

