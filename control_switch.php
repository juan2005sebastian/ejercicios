<?php

$mes = 8; // Cambia el valor para probar diferentes meses
$hemisferio = "norte"; // Puede ser "norte" o "sur"

switch ($mes) {
    case 12:
    case 1:
    case 2:
        echo ($hemisferio == "norte") ? "Es invierno en el hemisferio norte" : "Es verano en el hemisferio sur";
        break;
    case 3:
    case 4:
    case 5:
        echo ($hemisferio == "norte") ? "Es primavera en el hemisferio norte" : "Es otoño en el hemisferio sur";
        break;
    case 6:
    case 7:
    case 8:
        echo ($hemisferio == "norte") ? "Es verano en el hemisferio norte" : "Es invierno en el hemisferio sur";
        break;
    case 9:
    case 10:
    case 11:
        echo ($hemisferio == "norte") ? "Es otoño en el hemisferio norte" : "Es primavera en el hemisferio sur";
        break;
    default:
        echo "Mes inválido";
}

?>
