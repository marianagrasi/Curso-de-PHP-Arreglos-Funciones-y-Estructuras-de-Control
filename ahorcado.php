<?php
function clear()
{
    //Funcion para limpiar la pantalla
    if (PHP_OS === "WINNT") {
        system("cls");
    } else {
        system("clear");
    }
}

//Palabras del juego
$possible_words = ["Bebida", "Prisma", "Alas", "Piloto", "Dolor", "Baldosa", "Terremoto", "Asteroide", "Gallo", "Platzi"];

//Funciòn para definir la cantidad de intentos
define("MAX_ATTEMPS", 6);
//nombre juego
echo "¡Juego del ahorcado! \n\n ";
//Inicialzar el juegi
$choosen_word = $possible_words[rand(0, 9)];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $word_length, "_");
$attempts = 0;
do {


    //Indicar de cuantas letras es la palabra como pista
    echo "Palabra de $word_length letras \n";
    echo $discovered_letters . "\n \n";

    //Pedir al usuario que escriba
    $player_letter = readline("Escribe una letra: ");
    //Convertir minusculas 
    $player_letter = strtolower($player_letter);

    //Verificar si la letra se encuebtra dentro la palabra que eligio

    if (str_contains($choosen_word, $player_letter)) {
        //Verificar las ocurrencias de esta letra para reemplazarla
        //strpos()= Encuentra la posocion de la primera ocurrencia de un string  que el usuario escribio
        $oofset = 0;
        while (
            ($letter_position = strpos($choosen_word, $player_letter, $oofset)) !== false
        ) {

            $discovered_letters[$letter_position] = $player_letter;
            $oofset = $letter_position + 1;
        }
    } else {
        clear();
        $attempts++;
        echo "Letra incorrecta. Te quedan" . (MAX_ATTEMPS - $attempts) . "intentos.";
        sleep(2);
    }
    clear();
} while ($attempts < MAX_ATTEMPS && $discovered_letters != $choosen_word);
clear();
if ($attempts < MAX_ATTEMPS){
    echo "!Felicidades¡ Has adivinado la palabra. \n\n";
}else{
    echo "Suerte para próxima, amigo \n\n";
}
echo "La palabra es: $choosen_word \n";
echo "Tú descubriste $discovered_letters";
echo "\n";
