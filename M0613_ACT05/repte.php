<?php
    declare(strict_types=1);

    $productes = [
        ['nom' => 'Teclat mecanic RGB', 'categoria' => 'teclats','preu' => 79.90, 'estoc' => 4],
        ['nom' => 'Ratoli vertical', 'categoria' => 'ratolins','preu' => 29.95, 'estoc' => 7],
        ['nom' => 'Monitor 27" QHD', 'categoria' => 'monitors','preu' => 289.00, 'estoc' => 0],
        ['nom' => 'Auriculars ANC', 'categoria' => 'audio','preu' => 129.00, 'estoc' => 2],
        ['nom' => 'Hub USB-C 7 en 1', 'categoria' => 'accessoris','preu' => 34.90, 'estoc' => 20],
        ['nom' => 'Suport per a portatil','categoria' => 'accessoris','preu' => 24.50, 'estoc' => 0],
    ];

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
     * Formatea el precio con dos decimales
     * @param float $preu
     * @return string
     */
    function formatPreu(float $preu): string
    {
        return number_format($preu, 2, ',', '.') . ' EUR';
    }

    /**
     * Devuelve el estado segun las unidades
     * @param int $unitats
     * @return string
     */
    function estatEstoc(int $unitats): string
    {
        if ($unitats === 0) {
            return 'Esgotat';
        }
        if ($unitats <= 3) {
            return 'Ultimes unitats';
        }
        return 'Disponible';
    }

    /**
     * Devuelve los productos de la categoria
     * @param array $productes
     * @param string $categoria
     * @return array
     */
    function filtraCategoria(array $productes, string $categoria): array
    {
        if ($categoria === 'totes') {
            return $productes;
        }

        $filtrats = [];
        foreach ($productes as $producte) {
            if ($producte['categoria'] === $categoria) {
                $filtrats[] = $producte;
            }
        }
        return $filtrats;
    }

    /**
     * Devuelve el resumen del catalogo
     * @param array $productes
     * @return array
     */
    function resumCataleg(array $productes): array
    {
        $disponibles = 0;
        $valorEstoc = 0.0;

        //sumamos el precio por las unidades que quedan
        foreach ($productes as $producte) {
            if ($producte['estoc'] > 0) {
                $disponibles++;
            }
            $valorEstoc += $producte['preu'] * $producte['estoc'];
        }

        $total = count($productes);
        return [
            'Total' => $total,
            'Disponibles' => $disponibles,
            'Esgotats' => $total - $disponibles,
            "Valor de l'estoc" => formatPreu($valorEstoc),
        ];
    }

    /**
     * Muestra la ficha de un producto
     * @param array $producte
     * @return void
     */
    function pintaTargeta(array $producte): void
    {
        echo '<div class="targeta">';
        echo '<h3>' . htmlspecialchars($producte['nom'], ENT_QUOTES, 'UTF-8') . '</h3>';
        echo '<p>Preu amb IVA: ' . formatPreu(preuAmbIva($producte['preu'])) . '</p>';
        echo '<p>' . $producte['estoc'] . ' unitats · ' . estatEstoc($producte['estoc']) . '</p>';
        echo '</div>';
    }

    /**
     * Muestra la cuadricula de productos
     * @param array $productes
     * @return void
     */
    function pintaGraella(array $productes): void
    {
        //si el filtro no encuentra nada mostramos un mensaje
        if ($productes === []) {
            echo '<p>No hi ha productes en aquesta categoria</p>';
            return;
        }

        echo '<div class="graella">';
        foreach ($productes as $producte) {
            pintaTargeta($producte);
        }
        echo '</div>';
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

    <h2>Resum del cataleg</h2>
    <?php
        foreach (resumCataleg($productes) as $camp => $valor) {
            echo '<p>' . $camp . ': ' . $valor . '</p>';
        }
    ?>

    <h2>Tots els productes</h2>
    <?php pintaGraella(filtraCategoria($productes, 'totes')); ?>

    <h2>Accessoris</h2>
    <?php pintaGraella(filtraCategoria($productes, 'accessoris')); ?>

    <h2>Impressores</h2>
    <?php pintaGraella(filtraCategoria($productes, 'impressores')); ?>
</body>
</html>
