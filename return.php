<?php
function freddy()
{
    $numero_aleatorio =rand(1,3);
    $frase_freddy="";
    switch ($numero_aleatorio) {
        case 1:
            $frase_freddy= "Nunca pares de aprender \n";
            break;
        case 2:
            $frase_freddy= "Las empresas no son familia \n";
            break;
        case 3:
            $frase_freddy= "La tecnologia es el futuro \n";
            break;

    }
    return $frase_freddy;
}

echo freddy();
echo "\n";
