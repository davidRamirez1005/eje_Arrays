<?php

$planetas = array("marte", "jupiter", "venus", "mercurio", "saturno","ninguna por manco");
$claves_aleatorias = array_rand($planetas);
echo "Planeta a explorar: ".$planetas[$claves_aleatorias];

?>