<?php

function suma_masas($acumulador,$item){
    $acumulador += $item;
    return $acumulador;
;}

$naves = ["navre1"=>70,"navre2"=>30,"navre3"=>100,"navre4"=>50,"navre5"=>20,"navre6"=>30,"navre7"=>100];
$total = (array_reduce($naves,"suma_masas"));
echo "Total de las masas: ".$total
?>