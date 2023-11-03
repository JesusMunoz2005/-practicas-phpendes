<?php

$numero =$_GET['dia'];

switch ($numero) {
    case 1:
        $diaSemana = "Lunes";
        break;
    case 2:
        $diaSemana = "Martes";
        break;
    case 3:
        $diaSemana = "Miércoles";
        break;
    case 4:
        $diaSemana = "Jueves";
        break;
    case 5:
        $diaSemana = "Viernes";
        break;
    case 6:
        $diaSemana = "Sábado";
        break;
    case 7:
        $diaSemana = "Domingo";
        break;
    default:
        echo "Número fuera de rango. Por favor, ingresa un número del 1 al 7.";
        exit;
}

echo "El número $numero corresponde a $diaSemana.\n";
?>