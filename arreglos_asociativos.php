<?php

// $edades = array(
//     "Carlos"=> 18,
//     "Mr Rustin"=>20,
//     "Juan" => 40
// );


// echo "La edad de Carlos es". $edades["Carlos"];
// echo "\n";


$personas=array(
    "Carlos"=> array(
        "edad"=> 20,
        "apellido"=> "Rios"

    ),
);

echo"La información de Carlos es: Edad: ".$personas["Carlos"] ["edad"]. "Apellidos
: " .$personas["Carlos"]["apellido"];
echo "\n";


?>