<?php
    declare(strict_types=1);

    /**
     * Muestra el precio con IVA
     * @param float $base
     * @return void
     */
    function preuAmbIvaEcho(float $base): void
    {
        echo $base * 1.21;
    }

    /**
     * Calcula el precio con IVA
     * @param float $base
     * @return float
     */
    function preuAmbIva(float $base): float
    {
        return $base * 1.21;
    }

    /**
     * Formatea el precio con dos decimales
     * @param float $preu
     * @return string
     */
    function formatPreu(float $preu): string
    {
        return number_format($preu, 2, ',', '.') . ' EUR';
    }
?>

<!--HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BissBazzar</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <h1>BissBazzar</h1>
    <h2>EX 1</h2>
    <?php
        echo '<p>Amb echo: ';
        preuAmbIvaEcho(100.0);
        echo '</p>';

        //con return guardamos el precio y luego le damos formato
        $preu = preuAmbIva(100.0);
        echo '<p>Amb return: ' . formatPreu($preu) . '</p>';
    ?>

    <h2>EX 2</h2>
    <?php
        $preus = [79.90, 29.95, 289.00];
        $total = 0;

        //sumamos cada precio con el IVA ya calculado
        foreach ($preus as $preu) {
            $total += preuAmbIva($preu);
        }
        //mostramos el total con formatPreu
        echo '<p>Total amb IVA: ' . formatPreu($total) . '</p>';
        //mostramos el mas caro con IVA en una linea
        echo '<p>El mes car amb IVA: ' . formatPreu(preuAmbIva(max($preus))) . '</p>';

        //echo formatPreu(preuAmbIvaEcho(max($preus)));
        //preuAmbIvaEcho muestra el precio y no devuelve un numero
        //da TypeError porque formatPreu necesita un float y recibe null
    ?>
</body>
</html>
