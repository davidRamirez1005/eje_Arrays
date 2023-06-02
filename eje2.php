<?php
    $cantidad = $_POST["cantidad"];
    $final = array_fill(0, $cantidad, 'Deshabitado');
    print_r($final);
    echo "<br>";
    echo '<a href="index.html">volver</a>';
?>