<?php
    echo 'Hola';
    echo 'Hola', ' ', 'món';
    echo '<p>Text</p>';

    print 'Hola'; // retorna 1
    //Error  Warning: Undefined variable $x in /Applications/MAMP/htdocs/M0613/classe/exercicis_php/ex01_ok.php on line 7
    //Solucion declarar el valor de $x
    $x = 10;
    var_dump($x); // per depurar

    echo "<br>";

    //Error  Warning: Undefined variable $dades in /Applications/MAMP/htdocs/M0613/classe/exercicis_php/ex01_ok.php on line 11
    //Solucion declarar el valor de $dades
    $dades = 'Borja';
    print_r($dades); // llegible 

    echo "<br>";

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
    //Error Warning: Undefined variable $base in /Applications/MAMP/htdocs/M0613/classe/exercicis_php/ex01_ok.php on line 62
    //Solucion base tenemos que declarar $base
    $base = 10;
    $total = $base * (1 + IVA);
    //IVA = 0.10; -> error fatal

    $missatge = "Hola"; //ambit global

    function saluda($missatge){
        //Error  Warning: Undefined variable $missatge in /Applications/MAMP/htdocs/M0613/classe/exercicis_php/ex01_ok.php on line 71
        //Solucion pasamos el $missatge porque no lo ve
        echo $missatge; // no la veu
        $intern = 'Adeu'; //ambit local
    }

    //Para que no salte otro error tenemos que pasarle el parametro $missatge al saluda()
    saluda($missatge);
    // Warning: Undefined variable $intern in /Applications/MAMP/htdocs/M0613/classe/exercicis_php/ex01_ok.php on line 80
    //solucion declararlo fuera para que sea global

    $intern = 'Adeu'; //ambit global ahora
    
    echo $intern; //tampoc la veu

    //Directives canviar el comportament predeterminat
    //declare(string_types=1); primera linia del fitxer. PHP deixa de convertir tipus pel seu compte
    //init_set('display_errors', '1'); canvia un parametro solo para aquesta peticio
    //error_reporting(E_ALL); Decidex quins nivells d'error es tenen en compte ara mateix
    //setlocale() . date_default_timezone_set() idioma i zona horaria per a aquest script
