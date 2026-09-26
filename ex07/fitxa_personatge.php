<?php
    // CONSTANTS
    const NOM_JOC = "NUKEWARRIOR";
    const VIDA_MAXIMA = 100;
    const EXP_SUBIDA = 200;
    const FORCA_MAXIMA = 100;
    const FERIT = 40;

    // VARIABLES
    $nom = "nuke";
    $classe = "mago";
    $nivell = 5;
    $vida_actual = 50;
    $forca_actual = 30;
    $experiencia = 120;
    $atacbase = 30;


    // CALCULS
    //calcula el porcentaje de la vida con la actual y la maxima por *100 y dejamos un decimal
    $porcentaje_vida = round(($vida_actual / VIDA_MAXIMA) * 100, 1);

    $porcentaje_forca = round(($forca_actual / FORCA_MAXIMA) * 100, 1);

    $porcentaje_exp = round(($experiencia / EXP_SUBIDA) * 100, 1);

    $restante_exp = EXP_SUBIDA - $experiencia;
    //el ataque base + nivell que multiplicamos por 3
    $poderAtac = $atacbase + ($nivell * 3);


    // ESTAT DEL PERSONATGE
    $estatNormal = "Saludable";
    $estatferit = "Ferit";

    //Gracias a dios no me volvi loco revise los apuntes vi que utilizamos el true y el falso pense 
    //que podriamos activar variables con eso bueno aqui hacemos que si es igual 40 de 1 y sea true y si es mayor a 40
    //de 0 false y con eso activa ciertos bloques de html y css (un dia me tomo pensar la solucion y con ayuda lamentable)
    $ferit = ($vida_actual <= FERIT) * 1;

    //esta nada nos muestra true o false no sirve
    //$esta_ferit = $vida_actual < FERIT;

    //despues de estar media hora debatiendo que hacemos nos quedamos con la array te hubiera preguntado
    //pero no tenias buen dia

    //lo que hacemos es tenemos la variable $estatNormal, $estatferit y despues lo comparamos con la vida y la costante
    //si la comparacion mayor a 40 da 0 y pone el estado normal si es menor a 40 da 1 y nos pone el estatferit
    //$estat = [$estatNormal, $estatferit][$vida_actual < FERIT];

   

?>
<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Fitxa de personatge</title>
</head>
<body>
    <!--Pues creamos una clase para el titulo y pues hacemo una llamada a un atributo de php -->
    <div class="titulo">
        <h1><?= NOM_JOC ?></h1>
        <p>Fitxa de personatge</p>
    </div>
    <!--llamamos a php y con un echo mostramos la clase con ' simples y concatenammos con .  -->
    <div class="fitxa">
        <!--hacemo lo mismo pero con comillas dobles y nos deja poner la variable -->
        <h1><?php echo "$nom"; ?></h1>
        <p class="joc"><?php echo $classe . ' · NIVELL ' . $nivell; ?></p>
        <!--Mostramos la vida actual y la constante vida maxima llamando al php y monstramos el porcentaje-->
        <div class="info">
            <span>Vida</span>
            <span> <?= $vida_actual . " / " . VIDA_MAXIMA  . " — " .$porcentaje_vida ?>% </span>
        </div>
        <!--Mostramos el porcentaje de vida controlandolo con la variable de porcentaje_vida y eso modifica la barra-->
        <div class="barra">
            <span class="vida" style="width: <?= $porcentaje_vida ?>%"></span>
        </div>
        <!--Mostramos la fuerza actual y la constante fuerza maxima llamando al php y monstramos el porcentaje-->
        <div class="info">
            <span>Forca</span>
            <span><?= $forca_actual . " / ".FORCA_MAXIMA . " — " .  $porcentaje_forca ?>%</span>
        </div>        
        <!--Mostramos el porcentaje de vida controlandolo con la variable de porcentaje_forca y eso modifica la barra-->
        <div class="barra">
            <span class="forca" style="width: <?= $porcentaje_forca ?>%"></span>
        </div>
        <!--Mostramos la variable de poder atac-->
        <div class="info"> 
            <span> Poder d'atac:</span>
            <span> <?= $poderAtac ?> </span>
        </div>
        <!--Mostramos la experiencia y la que necesitamos para subir llamando al php y concatenamos-->
        <div class="info">
            <span>Experiència</span>
            <span> <?= $experiencia . " / " . EXP_SUBIDA ?> </span>
        </div>
        <!--Mostramos lo que falta de exp restante llamando a la varbaible de php-->
        <div class="info">
            <span>Falta</span>
            <span> <?= $restante_exp ?> punts d'experiència </span>
        </div>

        <!--mostramos el estado con la variable de php esta cambia dependiendo de la vida con true(1) o false(0) 
        muestra el estilo 1 o el 0  -->
        <div class="estat<?= $ferit ?>">
            <span class="normal"><?= $estatNormal ?></span>
            <span class="ferit"><?= $estatferit ?></span>
        </div>
    </div>
</body>
</html>