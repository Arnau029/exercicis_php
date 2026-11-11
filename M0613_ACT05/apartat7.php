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
     * Suma el precio por las unidades de cada producto
     * @param array $productes
     * @return float
     */
    function valorEstoc(array $productes): float
    {
        $total = 0.0;
        foreach ($productes as $producte) {
            $total += $producte['preu'] * $producte['estoc'];
        }
        return round($total, 2);
    }

    /**
     * Cuenta los productos que tienen cero unidades
     * @param array $productes
     * @return int
     */
    function quantsEsgotats(array $productes): int
    {
        $esgotats = 0;
        foreach ($productes as $producte) {
            if ($producte['estoc'] === 0) {
                $esgotats++;
            }
        }
        return $esgotats;
    }

    /**
     * Calcula el precio medio de los productos
     * @param array $productes
     * @return float
     */
    function preuMitja(array $productes): float
    {
        //si no hay productos devolvemos 0 para no dividir entre cero
        if (count($productes) === 0) {
            return 0.0;
        }

        $total = 0.0;
        foreach ($productes as $producte) {
            $total += $producte['preu'];
        }
        return round($total / count($productes), 2);
    }

    /**
     * Devuelve los productos que tienen stock
     * @param array $productes
     * @return array
     */
    function nomesDisponibles(array $productes): array
    {
        $disponibles = [];
        foreach ($productes as $producte) {
            if ($producte['estoc'] > 0) {
                $disponibles[] = $producte;
            }
        }
        return $disponibles;
    }

    /**
     * Devuelve el producto con el precio mas alto
     * @param array $productes
     * @return array
     */
    function elMesCar(array $productes): array
    {
        $mesCar = [];
        foreach ($productes as $producte) {
            if ($mesCar === [] || $producte['preu'] > $mesCar['preu']) {
                $mesCar = $producte;
            }
        }
        return $mesCar;
    }

    /**
     * Devuelve el resumen del catalogo
     * @param array $productes
     * @return array
     */
    function resumCataleg(array $productes): array
    {
        $mesCar = elMesCar($productes);

        return [
            'total' => count($productes),
            'disponibles' => count(nomesDisponibles($productes)),
            'mes_car' => $mesCar['nom'] ?? '',
        ];
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
        echo "<p>Valor de l'estoc: " . number_format(valorEstoc($productes), 2, ',', '.') . ' EUR</p>';
        echo '<p>Esgotats: ' . quantsEsgotats($productes) . '</p>';
        echo '<p>Preu mitja: ' . number_format(preuMitja($productes), 2, ',', '.') . ' EUR</p>';
        echo '<p>Preu mitja amb un array buit: ' . preuMitja([]) . '</p>';
    ?>

    <h2>EX 2</h2>
    <h3>Productes disponibles</h3>
    <ul>
        <?php
            foreach (nomesDisponibles($productes) as $producte) {
                echo '<li>' . $producte['nom'] . '</li>';
            }
        ?>
    </ul>

    <h3>Resum del cataleg</h3>
    <?php
        //recorremos el resumen para mostrar cada clave y su valor
        foreach (resumCataleg($productes) as $camp => $valor) {
            echo '<p>' . $camp . ': ' . $valor . '</p>';
        }
    ?>
</body>
</html>
