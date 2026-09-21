<?php
    echo 'Hola';
    echo 'Hola', ' ', 'món';
    echo '<p>Text</p>';

    print 'Hola'; // retorna 1
    var_dump($x); // per depurar
    print_r($dades); // llegible 

    $nom = 'Aina';
    $edat = 19;
    $actiu = true;

    $nom = 'Bernat'; //es pot canviar
    $total = $edat + 1;

    echo $nom;

    $x = 5;  //int
    $x = "cinc"; //ara string

    $a = '10' + 5; //15 (int)
    $b = '10' . 5; // '105' (string)

    var_dump($a, $b);

    //Texto simple '' no se interpreta las variables
    $nom = 'Aina';
    echo 'Hola $nom';

    // Hola $nom
    echo "<br>";
    //Doble comilla interpreta la variable
    $nom = 'Aina';
    echo "Hola $nom";

    // Hola Aina

    //concatenacion i interpolacio
    $nom = 'Aina'; $punts = 8;

    echo 'Hola ' . $nom . ', tens ' . $punts . 'punts'; //Concatenacion amb .
    echo "Hola $nom, tens $punts punts";                // interpolacio
    echo "Hola {$nom}, tens {$punts} punts";             //amb {}

    //Constants

    define('IVA', 0.21);
    const BOTIGA = 'Ca la Web';
    echo BOTIGA; // SENSE $
    $total = $base * (1 + IVA);
    //IVA = 0.10; -> error fatal

    $missatge = "Hola"; //ambit global

    function saluda(){
        echo $missatge; // no la veu
        $intern = 'Adeu'; //ambit local
    }

    saluda();
    echo $intern; //tampoc la veu

    //Directives canviar el comportament predeterminat
    //declare(string_types=1); primera linia del fitxer. PHP deixa de convertir tipus pel seu compte
    //init_set('display_errors', '1'); canvia un parametro solo para aquesta peticio
    //error_reporting(E_ALL); Decidex quins nivells d'error es tenen en compte ara mateix
    //setlocale() . date_default_timezone_set() idioma i zona horaria per a aquest script
