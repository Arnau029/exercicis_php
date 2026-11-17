<?php
// Aquesta línia ha de ser la PRIMERA de totes, sempre
session_start();
 
$_SESSION['visites'] = ($_SESSION['visites'] ?? 0) + 1;
 
echo 'Visites: ' . $_SESSION['visites'] . '<br>';
echo 'ID de sessio: ' . session_id() . '<br>';
echo 'Carpeta de sessions: ' . session_save_path();


//PHPSESSID hko169mral9eqccnpm6gr0sgbt eran el mismo