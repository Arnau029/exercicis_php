<?php
    //funciones con cadenas de texto    (strings)
    $cadena = "hola";

    $cadena[0] = "C";
    
    echo "Ahora vemos la cadena " . $cadena . "<br>"; //saldra cola (H por )

    //funciones preestablecida de php

    //strlen --> medir la longitut de la cadena
    $cadena = "aquesta cadena te moltes lletres <br>";

    $num_caracteres = strlen($cadena);

    echo "El total de caracters es: " . $num_caracteres . "<br>";

    //strpos --> retorna la casella on troba la subcadena
    //dins de la cadena pasada
    //sempre retorna la primera ocurrencia

    $email = "hola@jviladoms.cat";
    echo "Posicio @: " . strpos($email, "@") . "<br>";

    //strcmp --> string compare, compara dos cadenas
    //si retorna 0 es igual 
    //strcmp($cad1, $cad2);
    //si retorna <0 la primera cadena es mas pequena 
    //si retorna >0 la primera cadena es mas grande

    echo "Utilizamos strcmp: " . strcmp("Pepe", "Pepe") . "<br>";

    //substr retorna una subcadena de caracters d'una
    //cadena a partir d' una posicio especifica fins
    // al final o del tmany especificat.
    // la cadena original no pateix cap modificacio

    $cadena = "PHP es un llenguatge facil";

    echo "El substr de 0 a 3 es: " . substr($cadena, 0, 3) . "<br>";

    echo "El substr de 21 " . substr($cadena, 21) . "<br>";

    //trim: eliminar los espacios en blanco y saltos de linea que hay al principio y al final de una cadena
    echo "Ejemplo con trim: " . trim("          Hola que tal                ") . "<br>";

    //ltrim: elimina los espacios que hay en blanco al principio de la cadena

    echo "Ejemplo de ltrim: " .ltrim("              hola que tal                ") . "<br>";

    //str_replace($antiga, $nova, $cadena): subsitueix la cadena $antiga per la cadena $nova dins de $cadena
    $cadena = "PHP es facil";
    $antiga = "es facil";
    $nova = "no es dificl";

    echo "ejemplo str_replace: " . str_replace($antiga, $nova, $cadena) . "<br>";

    // ereg_replace / eregi_replace()

    //strtolower($cadena) : passa la cadena a minusculas

    //strtoupper($cadena): passa la cadena a majusculas

    // explode: permet dividir una cadena segons una caracter o patro

    //exercici 1: busca en php.net la funcio: str_word_count() y pon un ejemplo
        $texto = "Hola, me gusta programar en PHP";

        echo str_word_count($texto);
    //exercici 2: busca en php.net la funcio levenshtein() y pon un ejemplo
        $string1 = "Hola";
        $string2 = "HOLAAAAAAH";
        $lev = levenshtein($string1,$string2);
        echo $lev;
    //exercici 3: busca que es el operador ternario y pon un ejemplo
        $edad = 18;

        $resultado = $edad >= 18 ? "És major d'edat" : "És menor d'edat";

        echo $resultado;
    //exercici 4: Explicar que hace esta funcion:

    // function funcionMultipleReturns($v1,$v2,$v3){
    //     $v1 = "Variable1";
    //     $v2 = "Variable2";
    //     $v3 = "Variable3";
    //     return array($v1,$v2,$v3);
    // }



?>