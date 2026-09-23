<?php
    $preu = 99.99;

    const IVA = 1.21;
    const botiga = "Tineda online guay";
    const descompte_soxi = 1.20;

    const moneda = "€";
    $ref = "CAM-1325376";
    $stock = 5;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tineda online guay</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?=botiga?></h1>
        <p>Esto es una tineda online guay</p>
    </header>

    <main>
        <!--Warning: Constant moneda already defined in /Applications/MAMP/htdocs/M0613/classe/exercicis_php/ex06/index.php on line 27 -->
        <!--<?php
            //no puedes modificr una costante definida
            const moneda = "$";
        ?>-->
        <article class="producte">
            <h2>Camiseta GUAY</h2>
            <p class="descripcio">Camiseta chupi chupi guay</p>
            <p class="preu">Preu sense IVA: <?=$preu,moneda?></p>
            <p class="preu">IVA (21%): MUCHO</p>
            <!--number format le decimos lo que quermos y por lo que quermos cambiar en este caso el . por la , -->
            <p class="total">TOTAL: <?= number_format($preu * IVA, 2, ',', '.') . moneda ?></p>

            <p class="estoc">Unitats disponibles <?=$stock?> </p>
            <p class="ref"><?= $ref?></p>
        </article>
    </main>
    <footer>
        <p>Footer de la tienda chupi guay S.L</p>
    </footer>
</body>
</html>