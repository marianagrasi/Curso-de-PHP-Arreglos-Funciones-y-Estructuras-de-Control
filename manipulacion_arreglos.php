<?php
$edades=[18,22,40, 34];

//count = cuatos elemntos hay
// echo count($edades);

//array push = añade al final del arreglo
// array_push($edades, 13);
// var_dump($edades);

//is array = verificar si es un arreglo
$esto_no_es_un_arreglo="";
// var_dump(is_array($esto_no_es_un_arreglo));
// var_dump(is_array($edades));

//explode
$lista_de_frutas= "fresa, cereza, manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas);

var_dump($lista_de_frutas_array);


