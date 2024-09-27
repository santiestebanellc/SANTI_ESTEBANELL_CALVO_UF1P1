<?php

$dia = rand(1,12);
echo "dia = $dia<br><br>";

switch ($dia) {
    case 1:
        echo "El día corresponde al Lunes.<br>";
        break;
    case 2:
        echo "El día corresponde al Martes.<br>";
        break;
    case 3:
        echo "El día corresponde al Miércoles.<br>";
        break;
    case 4:
        echo "El día corresponde al Jueves.<br>";
        break;
    case 5:
        echo "El día corresponde al Viernes.<br>";
        break;    case 6:
        echo "El día corresponde al Sábado.<br>";
        break;
    case 7:
        echo "El día corresponde al Domingo.<br>";
        break;
    default:
        echo "El valor no se corresponde con ningún día de la semana.<br>";
        break;
}