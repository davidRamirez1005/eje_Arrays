<?php


$satelites = [
    "luna",
    "satelite_x",
    "calisto",
    "Deimos",
    "Satélite_A",
    "Ganímedes"
];
array_push($satelites, $_POST["planet"]);
print_r($satelites);
echo "<br>";
echo '<a href="index.html">volver</a>';
?>