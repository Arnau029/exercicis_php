<?php
require_once 'config.php';
require_once 'funcions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $titolPagina = 'Acces directe';
    require 'header.php';

    echo '<h2>Aqui no s\'hi arriba directament</h2>';
    echo '<a class="tornar" href="' . PAG_FORMULARI . '">Anar al formulari</a>';

    require 'footer.php';
    exit;
}

// recogemos los datos del form
$dades = [
    'nom' => camp('nom'),
    'cognom' => camp('cognom'),
    'naixement' => camp('naixement'),
    'telefono' => camp('telefono'),
    'correu' => camp('correu'),
    'usuari' => camp('usuari'),
    'carrer' => camp('carrer'),
    'poblacio' => camp('poblacio'),
    'codi_postal' => camp('codi_postal'),
    'tipus_client' => camp('tipus_client'),
    'origen' => camp('origen', 'no ho ha dit'),
    'butlleti' => isset($_POST['butlleti']) ? 'Si' : 'No',
];

$pass = $_POST['pass'] ?? '';
$pass2 = $_POST['pass2'] ?? '';
$condicions = isset($_POST['condicions']);

// check de los datos 
$errors = [];

if ($dades['nom'] == '') {
    $errors[] = 'El nombre es obligatorio';
}
if ($dades['cognom'] == '') {
    $errors[] = 'El cognom es obligatorio';
}
if ($dades['correu'] == '' || !filter_var($dades['correu'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'El correu electrònic no es valido';
}
if (strlen($dades['usuari']) < MIN_USUARI) {
    $errors[] = 'el nombre necesita minimo ' . MIN_USUARI . ' caracteres';
}
if (strlen($pass) < MIN_CLAU) {
    $errors[] = 'la password necesita minimo ' . MIN_CLAU . ' caracteres';
}
if ($pass != $pass2) {
    $errors[] = 'la password no coincide';
}
if ($dades['codi_postal'] != '' && !preg_match('/^[0-9]{5}$/', $dades['codi_postal'])) {
    $errors[] = 'el codigo postal tiene que ser de 5 cifras';
}
if (!in_array($dades['tipus_client'], ['particular', 'empresa', 'estudiant'])) {
    $errors[] = 'Has de seleccionar un tipo de client';
}
if (!$condicions) {
    $errors[] = 'Tienes que aceptar las condiciones';
}

$titolPagina = count($errors) > 0
    ? 'No s\'ha creat el compte'
    : 'Compte creat';

require 'header.php';
?>

    <?php if (count($errors) > 0): ?>
        <h2>Errores en el form</h2>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
        <a class="tornar" href="<?= PAG_FORMULARI ?>">Vuelve al formulari</a>
    <?php else: ?>
        <h2>Bienvenido <?= htmlspecialchars($dades['nom'], ENT_QUOTES, 'UTF-8') ?>!</h2>
        <p>El registro se ha completado</p>
        <h3>Resum de les dades</h3>
        <table cellpadding="8">
            <?php foreach ($dades as $clauCamp => $valor): ?>
                <tr>
                    <th scope="row"><?= htmlspecialchars(etiqueta($clauCamp), ENT_QUOTES, 'UTF-8') ?></th>
                    <td><?= htmlspecialchars($valor, ENT_QUOTES, 'UTF-8') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a class="tornar" href="gracies.php">Continuar</a>
    <?php endif; ?>

<?php
require 'footer.php';
