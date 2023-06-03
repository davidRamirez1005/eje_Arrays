<?php

$planetas = array("marte", "jupiter", "venus", "mercurio", "saturno","ninguna por manco");
$claves_aleatorias = array_rand($planetas);
echo "Planeta a explorar: ".$planetas[$claves_aleatorias];
echo "<br>";
echo '<a href="index.html">volver</a>';
?>