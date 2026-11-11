<?php

/**
 * Recoge un campo del formulario
 *
 * @param string $camp Nombre del campo
 * @param string $defecte Valor si falta el campo
 * @return string Texto sin espacios en los extremos
 */
function camp(string $camp, string $defecte = ''): string
{
    return trim($_POST[$camp] ?? $defecte);
}


/**
 * Busca la etiqueta de un campo
 *
 * @param string $clau Clave del campo
 * @return string Nombre que sale en la tabla
 */
function etiqueta(string $clau): string
{
    $noms = [
        'nom' => 'Nombre',
        'cognom' => 'Apellido',
        'naixement' => 'Fecha de nacimiento',
        'telefono' => 'Telefono',
        'correu' => 'Correo electronico',
        'usuari' => 'Nombre de usuario',
        'carrer' => 'Calle y numero',
        'poblacio' => 'poblacion',
        'codi_postal' => 'codigo postal',
        'tipus_client' => 'Tipo de cliente',
        'origen' => 'Como nos conocistes?',
        'butlleti' => 'Quieres recibir ofertas',
    ];

    return $noms[$clau] ?? ucfirst($clau);
}
