<?php
// EJERCICIO 1
$datos = [
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
];

$contador = 1;
echo "Ejercicio 1<br>";
foreach ($datos as $clave => $valor) {
    echo "dato {$contador}º: $valor<br>";
    $contador++;
}

// EJERCICIO 2
echo "<br>Ejercicio 2<br>";
foreach ($datos as $clave => $valor) {
    echo "$clave: $valor<br>";
}

// EJERCICIO 3
echo "<br>Ejercicio 3<br>";
$datos["edad"] = 24;
foreach ($datos as $clave => $valor) {
    echo "$clave: $valor<br>";
}

// EJERCICIO 4
echo "<br>Ejercicio 4<br>";
unset($datos["ciudad"]);
foreach ($datos as $clave => $valor) {
    echo "$clave: $valor<br>";
}

// EJERCICIO 5
echo "<br>Ejercicio 5<br>";

$letters = "a,b,c,d,e,f";

$letters_array = explode(",", $letters);
$letters_array = array_reverse($letters_array);

$contador = count($letters_array);
foreach ($letters_array as $letra) {
    echo "letter {$contador}º: $letra<br>";
    $contador--;
}

// EJERCICIO 6
echo "<br>Ejercicio 6<br>";

$notas = array(
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
);

$notas_ordenadas = $notas;
arsort($notas_ordenadas);

echo "Notas de los estudiantes ordenadas de mayor a menor:<br>";
foreach ($notas_ordenadas as $estudiante => $nota) {
    echo "$estudiante: $nota<br>";
}

// EJERCICIO 7
echo "<br>Ejercicio 7<br>";

$suma_total = array_sum($notas);
$num_estudiantes = count($notas);
$media = round($suma_total / $num_estudiantes, 2);

echo "Media de las notas: " . $media . "<br>";
echo "Alumnos con nota por encima de la media:<br>";

foreach ($notas as $estudiante => $nota) {
    if ($nota > $media) {
        echo $estudiante . "<br>";
    }
}

// EJERCICIO 8
echo "<br>Ejercicio 8<br>";

$nota_mas_alta = 0;
$mejor_alumno = "";

foreach ($notas as $alumno => $nota) {
    if ($nota > $nota_mas_alta) {
        $nota_mas_alta = $nota;
        $mejor_alumno = $alumno;
    }
}

echo "La nota más alta es " . $nota_mas_alta . " y el mejor alumno es " . $mejor_alumno;
