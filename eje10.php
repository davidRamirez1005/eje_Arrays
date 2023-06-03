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
$result = array_intersect($sistema_solar_1, $sistema_solar_2);
print_r($result);
echo "<br>";
echo '<a href="index.html">volver</a>';
?>