<?php

$num1 = rand(11,100);
$num2 = rand(11,100);

$num1_copy1 = $num1;
$num1_copy2 = $num2;

echo "numero 1 = $num1<br>";
echo "numero 2 = $num2<br><br>";

echo "Progresión de números pares desde 0 hasta $num1:<br>";
for ($i = 0; $i <= $num1; $i += 2) {
    echo "$i ";
}
echo "<br><br>";

echo "Progresión de números desde $num2 hasta 0:<br>";
while ($num2 >= 0) {
    echo "$num2 ";
    $num2--;
}
echo "<br><br>";

echo "Progresión numérica desde $num1_copy1 hasta $num1_copy2:<br>";
if ($num1_copy2 < $num1_copy1) {
    echo "$num1_copy1<br>";
} else {
    do {
        echo "$num1_copy1 ";
        $num1_copy1++;
    } while ($num1_copy2 >= $num1_copy1);
}

