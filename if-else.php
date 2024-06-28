<?php

$asientos_disponibles= 4;
$es_hijo_de_tom = true;

if($asientos_disponibles>0){
    echo "Si hay asientos disponibles, puedes ver la pelicula";
}
elseif($es_hijo_de_tom == true){
    echo "Podras ver la pelicula";
}

else{
    echo"No hay asientos disponibles";
}
echo "\n";