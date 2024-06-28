<?php
//foreach= recorrer cualquier elemento que sea iterable
//parte itenerable,  valor

$tiendita_de_cafes=array(
    "Americano"=>20,
    "Latte"=>25,
    "Capucciono"=>27.5,
    "Mocca"=>24,

);

foreach ($tiendita_de_cafes as $cafe=> $price){
    echo "El café $cafe cuenta $$price USD \n";

}
echo "\n";