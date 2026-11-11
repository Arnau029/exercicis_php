<?php
    declare(strict_types=1);

    $botiga = 'BissBazzar';

    /**
     * Prueba a usar una variable de fuera de la funcion
     * @return string
     */
    function mostra(): string
    {
        return 'Som a ' . $botiga;
    }

    /**
     * Devuelve el mensaje con el nombre que recibe
     * @param string $nom
     * @return string
     */
    function mostraBe(string $nom): string
    {
        return 'Som a ' . $nom;
    }

    /**
     * Cuenta con una variable que empieza de cero en cada llamada
     * @return int
     */
    function comptaLocal(): int
    {
        $n = 0;
        $n++;
        return $n;
    }

    /**
     * Cuenta con una variable que conserva su valor entre llamadas
     * @return int
     */
    function comptaStatic(): int
    {
        static $n = 0;
        $n++;
        return $n;
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
        //PHP Warning:  Undefined variable $botiga in /Applications/MAMP/htdocs/M0613/classe/exercicis_php/M0613_ACT05/apartat6.php on line 12
        //la funcion no puede usar la variable de fuera si no se la pasamos
        echo '<p>sense parametre: ' . mostra() . '</p>';
        echo '<p>Amb parametre: ' . mostraBe($botiga) . '</p>';
    ?>

    <h2>EX 2</h2>
    <?php
        //la variable local empieza de cero en cada llamada, por eso sale 1 1 1
        echo '<p>Local: ' . comptaLocal() . ', ' . comptaLocal() . ', ' . comptaLocal() . '</p>';

        //static guarda el valor de la llamada anterior, por eso sale 1 2 3
        echo '<p>Static: ' . comptaStatic() . ', ' . comptaStatic() . ', ' . comptaStatic() . '</p>';
    ?>
</body>
</html>
