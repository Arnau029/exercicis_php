<?php
    //Declaramos una constante IVA(no cambia de valor)
    const IVA = 0.21;

    $producte = 'Teclat';
    $base = 79.90;
    $estoc = 4;
    // funcion predefinida para redondear
    $total = round($base * (1 + IVA), 2);
    $nom = "Ale";
    $cognom = "Lopez";
    $correo = "AL02@gmail.com";
?>

<h2> <?php echo $producte ?></h2>
<p>Preu amb IVA: <?= $total; ?> EUR</p>
<p>Disponibilirar: <?=$estoc ?></p>
<h2>Dades Personals</h2>
<p>Nombre : <?=$nom ,' ',$cognom?></p>
<p>Correo : <?=$correo ?></p>

