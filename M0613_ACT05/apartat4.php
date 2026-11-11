<?php
    declare(strict_types=1);

    /**
     * Calcula el precio con IVA
     * @param float $base
     * @param float $iva
     * @return float
     */
    function preuAmbIva(float $base, float $iva = 0.21): float
    {
        return round($base * (1 + $iva), 2);
    }

    /**
     * Aplica un descuento al precio
     * @param float $preu
     * @param int $percentatge
     * @return float
     */
    function aplicaDescompte(float $preu, int $percentatge = 10): float
    {
        return round($preu - ($preu * $percentatge / 100), 2);
    }

    //prueba: function benvinguda(string $salutacio = 'Hola', string $nom): string
    //Deprecated: benvinguda(): Optional parameter $salutacio declared before required parameter $nom is implicitly treated as a required parameter
    //si ponemos el opcional primero PHP lo trata como obligatorio
    /**
     * Devuelve un saludo con el nombre
     * @param string $nom
     * @param string $salutacio
     * @return string
     */
    function benvinguda(string $nom, string $salutacio = 'Hola'): string
    {
        return $salutacio . ' ' . $nom . '!';
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
        //si no pasamos el IVA usa el 21 %
        echo '<p>IVA del 21 %: ' . preuAmbIva(100.0) . ' EUR</p>';
        echo '<p>IVA del 10 %: ' . preuAmbIva(100.0, 0.10) . ' EUR</p>';
        echo '<p>IVA del 4 %: ' . preuAmbIva(100.0, 0.04) . ' EUR</p>';
    ?>

    <h2>EX 2</h2>
    <?php
        echo '<p>Descompte del 10 %: ' . aplicaDescompte(100.0) . ' EUR</p>';
        echo '<p>Descompte del 25 %: ' . aplicaDescompte(100.0, 25) . ' EUR</p>';
    ?>

    <h2>EX 3</h2>
    <?php
        echo '<p>' . benvinguda('Arnau') . '</p>';
        echo '<p>' . benvinguda('Arnau', 'Bon dia') . '</p>';
    ?>
</body>
</html>
