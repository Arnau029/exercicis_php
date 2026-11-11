<?php
    declare(strict_types=1);

    /**
     * Muestra la cabecera de la tienda
     * @return void
     */
    function capcalera(): void
    {
        echo '<header>';
        echo '<h1>BissBazzar</h1>';
        echo '<p>botiga de moltes coses</p>';
        echo '</header>';
    }

    /**
     * Muestra el pie de la tienda con el ano actual
     * @return void
     */
    function peu(): void
    {
        echo '<footer>BissBazzar · ' . date('Y') . '</footer>';
    }

    /**
     * Muestra un mensaje de bienvenida
     * @return void
     */
    function avis(): void
    {
        echo '<p>estas a BissBazzar</p>';
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
    <?php
        capcalera();

        //llamamos tres veces y sale el mismo pie cada vez
        peu();
        peu();
        peu();

        //si solo declaramos avis() no se ejecuta, hay que llamarla
    ?>
</body>
</html>
<!--el footer se escribe una vez en php y sale tres veces en el html es loco-->