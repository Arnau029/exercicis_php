<?php
    /* nom = "Aina"; 1-Error no tenia el $ la variable*/
    $nom = 'Aina';
    //$assignatura = 'Desenvolupament web' 2-Error falta el ; para cerrar
    $assignatura = 'Desenvolupament web';

    $nota1 = 7;
    $nota2 = 9;
    //ERROR POR LA JERARQUIA
    $mitjana = $nota1 + $nota2 / 2;

    echo '<h1>Butlleti de notes</h1>';
    //echo '<p>Alumna: $nom</p>' 3-Error no ""
    echo "<p>Alumna: " . $nom . "</p>";
    //Error 123:Echo  echo '<p>Assignatura: ' + $assignatura + '</p>';
    echo '<p>Assignatura: ' . $assignatura . '</p>';
    //echo "<p>Mitjana: $mitjana </p>;
    //4-Error falta la comilla finales
    //5- . para meter la variable en medio
    echo "<p>Mitjana" . $mitjana . "</p>";

    echo '<p>General el ' . date('d/m/Y') . '</p>';

