<?php
//Se ejecuta al menos una sola vez
$usernames=["Mariana123", "Valentina", "Manuela"];
do{
    $username = readline("Por favor ingresa tu nuevo nombre de usuario");
    echo "\n";
} while(in_array($username, $usernames));

echo "\n";