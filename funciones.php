<?php
//FUNCIONES= 
//rand=funcion aleatorio
function get_nombre()
{
    $numero_aleatorio = rand(1,5);
    switch ($numero_aleatorio) {
        case 1:
            echo "Mariana\n";
            break;
        case 2:
            echo "Ana\n";
            break;
        case 3:
            echo "Mari\n";
            break;
        case 4:
            echo "Marian\n";
            break;
        default:
            echo "Lo siento, no hay nombre para ti";
    }
}
// get_nombre();

for ($i=0; $i <20 ; $i++) { 
    # code...
    get_nombre();
}
echo "\n";
