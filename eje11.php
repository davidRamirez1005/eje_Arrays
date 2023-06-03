<?php

$sistema_solar_1 = [
    "Sol",
    "Mercurio",
    "Venus",
    "Tierra",
    "Marte",
    "Júpiter",
    "Saturno",
    "Urano",
    "Neptuno"
];
$sistema_solar_2 = [
    "Sol",
    "Planeta_X",
    "Planeta_Y",
    "Venus",
    "Satélite_A",
    "Tierra",
    "Satélite_C",
    "Satélite_D",
    "Satélite_E"
];
$resultado1 = array_diff($sistema_solar_1, $sistema_solar_2);
$resultado2 = array_diff($sistema_solar_2, $sistema_solar_1);


print_r($resultado1);
echo "<br><br><br>";
print_r($resultado2);

?>