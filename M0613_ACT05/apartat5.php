<?php
    declare(strict_types=1);

    /**
     * Calcula el area de un rectangulo
     * @param float $base
     * @param float $altura
     * @return float
     */
    function area(float $base, float $altura): float
    {
        return $base * $altura;
    }

    /**
     * Comprueba si el producto esta agotado
     * @param int $unitats
     * @return bool
     */
    function esgotat(int $unitats): bool
    {
        return $unitats === 0;
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
        echo '<p>area amb decimals: ' . area(3.5, 4.0) . '</p>';

        //PHP acepta enteros cuando el parametro pide un float
        echo '<p>Area amb enters: ' . area(3, 4) . '</p>';

        //el try/catch muestra el error y deja que la pagina siga
        //TypeError: area(): Argument #1 ($base) must be of type float, string given
        try {
            echo area('3', 4.0);
        } catch (TypeError $e) {
            echo '<p>Error de tipus: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . '</p>';
        }

        //asi vemos si llega un tipo que no toca y decidimos cuando convertirlo
        echo '<p>Area convertint el text a float: ' . area((float) '3', 4.0) . '</p>';

        echo '<p>Esgotat amb 0 unitats: ' . (esgotat(0) ? 'Si' : 'No') . '</p>';
        echo '<p>Esgotat amb 4 unitats: ' . (esgotat(4) ? 'Si' : 'No') . '</p>';
    ?>
</body>
</html>
