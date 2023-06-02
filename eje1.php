<?php

function orden_planetas(){
    $planetas = ["sol"=> 0,"mercurio"=> 1,"venus"=> 2,"tierra"=> 3,"marte"=> 4,"jupiter"=> 5,"saturno"=> 6,"urano"=> 7,"neptuno"=> 8,"pluton"=> 9];
  $intercambio =  array_flip($planetas);
  $numero = $_POST["numero"];
  if ($intercambio[$numero]) {
    echo "<h2>$intercambio[$numero]</h2>";
  }

};
print_r(orden_planetas()) ;
?>