<?php

// Crea una funcion llamada "slug" que reciba un string y lo convierta en un slug.
// Un slug es una versión de un string para hacerlo legible en una URL, por ej: "Hola Mundo" se convierte en "hola-mundo".
// El string deberá ser convertido a minúsculas y los espacios deberán ser reemplazados por guiones.
// La función deberá devolver el nuevo string.
// Si el string está vacío deberá devolver "error".


// Aquí tu código

function slug(string $cadena){

    $reducir_cadena = strtolower($cadena);

    if (empty($cadena) or $cadena == " ") {
        return "error";
    } else {
        $dab = str_replace(" ", "-", $reducir_cadena);
        return $dab;
    }

}


slug("Pato Loco");

// TESTS
assert(slug("Hola Mundo") == "hola-mundo");
assert(slug("Hola Mundo Cruel") == "hola-mundo-cruel");
assert(slug("Hola") == "hola");
assert(slug("") == "error");
assert(slug(" ") == "error");




/**
 * Pista 😁
 * https://www.php.net/manual/es/function.strtolower.php
 * https://www.php.net/manual/es/function.str-replace.php 
**/