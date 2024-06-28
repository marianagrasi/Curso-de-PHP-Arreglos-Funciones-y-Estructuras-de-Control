<?php

$escuela= array(
    array(
        "Nombre"=> "Lola",
        "Ocupacion"=> "Mascota",
        "Color" => "Naranja",
        "Comidas"=> array(
            "Favoritas"=> "Sopa, Fresas",
            "NoFavoritas"=> "Mango", "Peras"
        )
    ),
    array(
        "Nombre"=> "Eliot",
        "Ocupacion"=> "Mascota",
        "Color" => "Negro y Blanco",
        "Comidas"=> array(
            "Favoritas"=> "Sopa, Fresas",
            "NoFavoritas"=> "Mango", "Peras"
        )
    ),
    array(
        "Nombre"=> "Alvin",
        "Ocupacion"=> "Mascota",
        "Color" => "Blanco y Gris",
        "Comidas"=> array(
            "Favoritas"=> "Sopa, Fresas",
            "NoFavoritas"=> "Mango", "Peras"
        )
    ),

);

$eliot=$escuela[1];


echo "Las comidas favoritas de Eliot son:". $eliot['Comidas'] ['Favoritas'];

echo "\n";