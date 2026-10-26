<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<p>Entrar al formulario</p>';
    echo '<a href="registre.html">volver al form</a>';
    exit;
}

// recogemos lso datos del form
$nom = trim($_POST['nom'] ?? '');
$cognom = trim($_POST['cognom'] ?? '');
$naixement = trim($_POST['naixement'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$correu = trim($_POST['correu'] ?? '');
$usuari = trim($_POST['usuari'] ?? '');
$carrer = trim($_POST['carrer'] ?? '');
$poblacio = trim($_POST['poblacio'] ?? '');
$codi_postal = trim($_POST['codi_postal'] ?? '');
$tipus_client = trim($_POST['tipus_client'] ?? '');
$origen = trim($_POST['origen'] ?? '');

$pass = $_POST['pass'] ?? '';
$pass2 = $_POST['pass2'] ?? '';

$butlleti = isset($_POST['butlleti']) ? 'Si' : 'No';
$condicions = isset($_POST['condicions']);

//array associatiu para guardar los datos
$dades = [
    'Nombre' => $nom,
    'Apellido' => $cognom,
    'Fecha de nacimiento' => $naixement,
    'Telefono' => $telefono,
    'Correo electronico' => $correu,
    'Nombre de usuario' => $usuari,
    'Calle y numero' => $carrer,
    'poblacion' => $poblacio,
    'codigo postal' => $codi_postal,
    'Tipo de cliente' => $tipus_client,
    'Como nos conocistes?' => $origen,
    'Quieres recibir ofertas' => $butlleti
];

// check de los datos 
$errors = [];

if ($nom == '') {
    $errors[] = 'El nombre es obligatorio';
}
if ($cognom == '') {
    $errors[] = 'El cognom es obligatorio';
}
if ($correu == '' || !filter_var($correu, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'El correu electrònic no es valido';
}
if (strlen($usuari) < 4) {
    $errors[] = 'el nombre necesita minimo 4 caracteres';
}
if (strlen($pass) < 6) {
    $errors[] = 'la password tiene que ser de mas de 6 caracteres';
}
if ($pass != $pass2) {
    $errors[] = 'la password no coincide';
}
if ($codi_postal != '' && !preg_match('/^[0-9]{5}$/', $codi_postal)) {
    $errors[] = 'el codigo postal tiene que ser de 5 cifras';
}
if (!in_array($tipus_client, ['particular', 'empresa', 'estudiant'])) {
    $errors[] = 'Has de seleccionar un tipo de client';
}
if (!$condicions) {
    $errors[] = 'Tienes que aceptar las condiciones';
}

// mostramos errors o el resum
if (count($errors) > 0) {
    echo '<h2>Errores en el form</h2>';
    echo '<ul>';

    foreach ($errors as $error) {
        echo '<li>' . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . '</li>';
    }
    echo '</ul>';
    echo '<a href="registre.html">Vuelve al formulari</a>';
} else {
    echo '<h2>Bienvenido ' . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') . '!</h2>';
    echo '<p>El registro se ha completado</p>';
    echo '<h3>Resum de les dades</h3>';
    echo '<table border="1" cellpadding="8">';
    foreach ($dades as $camp => $valor) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($camp, ENT_QUOTES, 'UTF-8') . '</td>';
        echo '<td>' . htmlspecialchars($valor, ENT_QUOTES, 'UTF-8') . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
