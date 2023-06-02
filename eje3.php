<?php
function universo(){
    $planetas = ["planeta1"=>true,"planeta2"=>false,"planeta3"=>true,"planeta4"=>false,"planeta5"=>false,"planeta6"=>true];
    $a=(array_filter($planetas));
    print_r($a);
};
universo()
?>