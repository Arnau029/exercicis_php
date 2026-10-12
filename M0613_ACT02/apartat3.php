
<?php
//ex 1
$grups = array('Aitana', 'Quevedo', 'Bad Gyal', 'Rosalia', 'Estopa');

// check de cual es
if (in_array('Aitana', $grups, true)) {
    echo "Aitana esta al cartell <br>";
} else {
    echo "Aitana no esta al cartell <br>";
}

if (in_array('El borja', $grups, true)) {
    echo "El borja esta al cartell <br>";
} else {
    echo "El borja no esta al cartell <br>";
}

//busca la posicion del grupo en una funcion y dentro un foreach con if de nom == grupo devuelve la 
//posicion sino -1 de que no existe
function buscaGrup(array $llista, string $grup) {
    foreach ($llista as $posicio => $nom) {
        if ($nom == $grup) {
            return $posicio;
        }
    }

    return -1;
}

//echo con resultados
echo "Posicio de Quevedo: " . buscaGrup($grups, 'Quevedo') . "<br>";
//este no existe
echo "Posicio de El borja: " . buscaGrup($grups, 'El borja');

//ex 2

$assistents = array(
    'Aitana' => 3000,
    'Quevedo' => 4500,
    'Bad Gyal' => 2500,
    'Rosalia' => 5000,
    'Estopa' => 3500
);

//copias
$ordre1 = $assistents;
$ordre2 = $assistents;
$ordre3 = $assistents;
$ordre4 = $assistents;

asort($ordre1);
arsort($ordre2);
ksort($ordre3);
krsort($ordre4);

//prints
//en estos usamos el pre porque nos ayuda a darle un formato una locura 
echo "<h3>asort()</h3>";
echo "<pre>";
print_r($ordre1);
echo "</pre>";

echo "<h3>arsort()</h3>";
echo "<pre>";
print_r($ordre2);
echo "</pre>";

echo "<h3>ksort()</h3>";
echo "<pre>";
print_r($ordre3);
echo "</pre>";


echo "<h3>krsort()</h3>";
echo "<pre>";
print_r($ordre4);
echo "</pre>";

// asort ordena pels valors i ksort ordena per les claus.

//ex 3

echo"<h2>EX 3</h2>";
shuffle($assistents);


echo "<pre>";
print_r($assistents);
echo "</pre>";
echo "<br>";

// los nombre del los gruops se ven remplazados por indinces al mezclar

// mezclamos otra vez 
$grups = array('Aitana', 'Quevedo', 'Bad Gyal', 'Rosalia', 'Estopa');

shuffle($grups);

echo "<h3>Ordre del sorteig</h3>";

foreach ($grups as $posicio => $grup) {
    echo ($posicio + 1) . ". $grup<br>";
}


?>
