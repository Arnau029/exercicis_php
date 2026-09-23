<?php
    $nom = 'Aina';
    $n = 3;

    //prediu la sortida de:
    echo 'Hola $nom'; //-->  Hola $nom
    echo "<br>";
    echo "Hola $nom"; //--> Hola Aina
    echo "<br>";
    echo 'Total: ' . $n; //--> Total: 3
    echo "<br>";
    echo "Total: $n"; //--> Total: 3
    echo "<br>";
    echo 'Preu: $' . $n; //--> preu $3
    echo "<br>";
    echo "Preu: \$$n"; //--> preu $3
    echo "<br>";
    echo "{$n}a posicio"; //-->3a posicio
    echo "<br>";
    echo '$n' . "$n"; //--> $n3
    echo "<br>";