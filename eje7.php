<?php

function busqueda_tipo($naves,$busqueda){
    if (array_search($busqueda, $naves)) {
        echo "EXISTE LA NAVE :)";
    }
    else{
        echo "NO EXISTE LA NAVE :(";
    }
}
$naves =["rojas","nave","space","sputnik","navecita","hola","sputnik","lis",];
$busqueda = $_POST["nave-tipo"];
busqueda_tipo($naves,strtolower($busqueda));

?>