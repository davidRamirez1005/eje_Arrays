<?php

function gravedad_planeta($calcular){
    return $calcular * 9.81;
};

$gravedad = ["mercurio"=> 0.38,"venus"=> 0.91,"tierra"=> 1.0,"marte"=> 0.38,"jupiter"=> 2.53,"saturno"=> 1.06,"urano"=> 0.92,"neptuno"=> 1.17];

$real = array_map("gravedad_planeta", $gravedad);
print_r($real);
?>