<?php
    declare(strict_types=1);

    /**
     * Saluda a la persona por su nombre
     * @param string $nom
     * @return void
     */
    function saluda(string $nom): void
    {
        echo '<p>Benvingut a BissBazzar ' . $nom . '!</p>';
    }

    /**
     * Muestra la ficha del producto
     * @param string $nom
     * @param float $preu
     * @param int $estoc
     * @return void
     */
    function targeta(string $nom, float $preu, int $estoc): void
    {
        echo '<h3>' . $nom . '</h3>';
        echo '<p>' . number_format($preu, 2, ',', '.') . ' EUR</p>';
        echo '<p>' . $estoc . ' unitats</p>';
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
        //llamamos a la misma funcion con tres nombres
        saluda('Arnau');
        saluda('Natalia');
        saluda('Borja');
    ?>

    <h2>EX 2</h2>
    <!--Las tres fichas van dentro de la misma graella-->
    <div class="graella">
        <?php
            targeta('Teclat mecanic', 79.90, 4);
            targeta('Ratoli vertical', 29.95, 7);
            targeta('Monitor QHD', 289.00, 2);
        ?>
    </div>

    <h2>EX 3</h2>
    <?php
        //targeta(79.90, 'Teclat mecanic', 4);
        //TypeError: Argument #1 ($nom) must be of type string, float given
        //el primer parametro espera el nombre y le hemos pasado el precio
        targeta('Teclat mecanic', 79.90, 4);
    ?>
</body>
</html>
