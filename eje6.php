<?php

function busqueda_planeta($planetas,$busqueda){
    if (in_array($busqueda, $planetas)) {
        echo "EXISTE EL PLANETA :)";
    }
    else{
        echo "NO EXISTE EL PLANETA :(";
    }
}
$planetas =["sol","mercurio","venus","tierra","marte","jupiter","saturno","urano","neptuno","pluton"];
$busqueda = $_POST["busqueda"];
busqueda_planeta($planetas,strtolower($busqueda))}

?>