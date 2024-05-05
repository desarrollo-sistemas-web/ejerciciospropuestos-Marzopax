<?php

// Genera una función "palindromo" que reciba un string y determine si es un palíndromo (true) o no (false).
// Un palíndromo es una palabra o frase que se lee igual en un sentido que en otro.
// La función deberá devolver un booleano.
// La función deberá ignorar los espacios, los signos de puntuación y deberá ser case-insensitive.


// Aquí tu código
function palindromo($cadena){

    $reducir_cadena = strtolower($cadena);
    $sin_espacios = str_replace(" ", "", $reducir_cadena);
    $sin_acentos = str_replace(array("Á", "á"), array("A", "a"), $sin_espacios);
    $dar_vuelta = strrev($sin_acentos);

    if ($sin_acentos == $dar_vuelta) {
        return true;
    } else {
        return false;
    }

}


// TESTS
assert(palindromo("Anita lava la tina") == true);
assert(palindromo("A mamá Roma le aviva el amor a papá y a papá Roma le aviva el amor a mamá") == true);
assert(palindromo("Anita lava la tina y la atina") == false);
