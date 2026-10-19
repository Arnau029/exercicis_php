<?php
/*
    PAS 4 - Validar,control d'errors i escapar

*/
//declarar  de variables

$nom = '';
$correu = '';
$dia = '';
$errors = [];
$inscrit = false;

//Si recibimos los datos
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nom = trim($_POST['nom'] ?? '');
    $correu = trim($_POST['correu'] ?? '');
    $dia = trim($_POST['dia'] ?? '');

    //validar los errores
    if($nom === ''){
        $errors['nom'] = 'El nom es obligatori';
    }

    if($correu === ''){
        $errors['correu'] = 'El correu es obligatori.';
    }
    elseif(filter_var($correu, FILTER_VALIDATE_EMAIL) === false){
        //si han agregado el formato de correo al email
        $errors['correu'] = 'aquest correu no te un format valid';
    }

    if($dia != 'divendres' && $dia != 'dissabte'){
        $errors['dia'] = 'has de triar un dia';
    }
    //si el count del array $errors es 0 --> que no hay errores
    if(count($errors) === 0){
        $inscrit = true;
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incripcio al festival</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1></h1>
    <?php if($inscrit): ?>
    <!-- Escapar los datos recibidos -->
     <p class="ok">Inscripcio feta, <?= htmlspecialchars($nom, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')?></p>
     <p class="ok">T'esperem el, <?= htmlspecialchars($dia, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')?></p>
    <?php else: ?>
        <form method="POST" novalidate>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($nom, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')?>">
            <?php if (isset($errors['nom'])): ?>
                <p class="error"><?= htmlspecialchars($errors['nom'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')?></p>
            <?php endif; ?>

            <label for="correu">correu</label>
            <input type="text" id="correu" name="correu" value="<?= htmlspecialchars($correu, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')?>">
            <?php if (isset($errors['correu'])): ?>
                <p class="error"><?= htmlspecialchars($errors['correu'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')?></p>
            <?php endif; ?>

            <label for="dia">Dia</label>
            <select id="dia" name="dia">
                <option value="">Tria un dia</option>
                <option value="divendres" <?= $dia === 'divendres' ? 'selected' : ''?>>Divendres</option>
                <option value="dissabte" <?= $dia === 'dissabte' ? 'selected' : ''?>>Dissabte</option>
            </select>
            <?php if (isset($errors['dia'])): ?>
                <p class="error"><?= htmlspecialchars($errors['dia'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')?></p>
            <?php endif; ?>
            <button type="submit"> inscripcio</button>
        </form>
        <?php endif; ?>
</body>
</html>