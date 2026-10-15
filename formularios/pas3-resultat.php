<?php
/*
    PAS 3 - UNA SOLA PAGINA

    La primera visita es GET.
    Quan enviem el formulari, es POST.

    Validem les dades abans d'utilitzar-les.
*/

    $nom = '';
    $correu = '';
    $vcorreu = '';
    $dia = '';
    $telefono = '';
    $calle = '';

    $enviat = false;
    $error = '';

    // Escapar dades quan les mostrem en HTML
    function netejar($text) {
        return htmlspecialchars(
            $text,ENT_QUOTES | ENT_SUBSTITUTE,'UTF-8'
        );
    }

    // Comprovar que el text no contingui etiquetes
    function esTextValid($text) {
        return !preg_match('/<[^>]*>/', $text);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nom = trim($_POST['nom'] ?? '');
        $correu = trim($_POST['correu'] ?? '');
        $vcorreu = trim($_POST['vcorreu'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $calle = trim($_POST['calle'] ?? '');
        $dia = trim($_POST['dia'] ?? '');

        // Comprovar etiquetes HTML o possibles scripts
        if (
            !esTextValid($nom) ||
            !esTextValid($correu) ||
            !esTextValid($vcorreu) ||
            !esTextValid($telefono) ||
            !esTextValid($calle)
        ) {
            $error = "No es permet introduir etiquetes HTML.";

        // Validar el nom
        } elseif (!preg_match("/^[\p{L}\s'-]{2,60}$/u", $nom)) {
            $error = "El nom no es valid.";

        // Validar el correu
        } elseif (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
            $error = "El correu no es valid.";

        // Comparar els dos correus
        } elseif ($correu !== $vcorreu) {
            $error = "Els correus no coincideixen.";

        // Validar el telefon
        } elseif (!preg_match('/^[0-9+\s().-]{6,20}$/', $telefono)) {
            $error = "El telefon no es valid.";

        // Validar el carrer
        } elseif ($calle === '' || mb_strlen($calle, 'UTF-8') > 100) {
            $error = "El carrer no es valid.";

        // Validar el dia
        } elseif (!in_array($dia, ['divendres', 'dissabte'], true)) {
            $error = "El dia no es valid.";

        } else {
            $enviat = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcio al festival</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Inscripcio al festival</h1>

    <?php if ($error !== ''): ?>
        <p><?= netejar($error) ?></p>
    <?php endif; ?>

    <?php if ($enviat): ?>
        <p>
            Inscripcio rebuda:
            <?= netejar($nom) ?>,
            <?= netejar($correu) ?>,
            telefon <?= netejar($telefono) ?>,
            carrer <?= netejar($calle) ?>,
            dia <?= netejar($dia) ?>
        </p>
    <?php endif; ?>

    <form method="POST">

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom"
               maxlength="60" value="<?= netejar($nom) ?>" required>

        <label for="correu">Correu</label>
        <input type="email" id="correu" name="correu"
               maxlength="254" value="<?= netejar($correu) ?>" required>

        <label for="vcorreu">Verificar correu</label>
        <input type="email" id="vcorreu" name="vcorreu"
               maxlength="254" value="<?= netejar($vcorreu) ?>" required>

        <label for="telefono">Telefon</label>
        <input type="tel" id="telefono" name="telefono"
               maxlength="20" value="<?= netejar($telefono) ?>" required>

        <label for="calle">Carrer</label>
        <input type="text" id="calle" name="calle"
               maxlength="100" value="<?= netejar($calle) ?>" required>

        <label for="dia">Dia</label>
        <select id="dia" name="dia" required>
            <option value="">Selecciona un dia</option>
            <option value="divendres"
                <?= $dia === 'divendres' ? 'selected' : '' ?>>
                Divendres
            </option>
            <option value="dissabte"
                <?= $dia === 'dissabte' ? 'selected' : '' ?>>
                Dissabte
            </option>
        </select>
        <button type="submit">Inscriure'm</button>
    </form>
</body>
</html>