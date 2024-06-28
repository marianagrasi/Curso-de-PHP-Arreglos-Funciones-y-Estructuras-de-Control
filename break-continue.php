<?php

$tiendita_de_cafes=array(
    "Americano"=>20,
    "Latte"=>25,
    "Capucciono"=>27.5,
    "Mocca"=>24,

);

// foreach ($tiendita_de_cafes as $cafe => $precio) {
//     echo "Actualmente encontré al café $cafe \n";
//     # code...
//     if($cafe== "Latte"){
//         echo "¡Encontramos a Latte!";
//         break;

//     }
// }
// echo "\n";

//Se ignora a cafe americano

foreach ($tiendita_de_cafes as $cafe => $precio) {
    # code...
    if($cafe== "Americano")
        continue;
    echo "¡El café $cafe es muy rico!\n";

    
}
echo "\n";

