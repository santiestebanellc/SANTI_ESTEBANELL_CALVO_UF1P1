<?php

$dado = rand(1, 6);

$dado_valores = [
    1 => ["letras" => "Uno", "opuesto" => 6],
    2 => ["letras" => "Dos", "opuesto" => 5],
    3 => ["letras" => "Tres", "opuesto" => 4],
    4 => ["letras" => "Cuatro", "opuesto" => 3],
    5 => ["letras" => "Cinco", "opuesto" => 2],
    6 => ["letras" => "Seis", "opuesto" => 1]
];

echo "El numero obtenido es: $dado (" . $dado_valores[$dado]["letras"] . ")<br>";

$cara_opuesta = $dado_valores[$dado]["opuesto"];
echo "La cara opuesta es: $cara_opuesta (" . $dado_valores[$cara_opuesta]["letras"] . ")<br>";

