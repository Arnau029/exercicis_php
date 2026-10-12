<?php
echo "<h1>EX 1</h1>";
//array grups
$grups = array('Aitana', 'Quevedo', 'Bad Gyal', 'Rosalia', 'Estopa');

//llista 1
echo "<h2>Llista de grups</h2>";

//for each li
echo "<ul>";
foreach ($grups as $grup):
    echo "<li>$grup</li>";
endforeach;
echo "</ul>";

//lista 2 con posicion
echo "<h2>Llista de grups amb posicio</h2>";

//for each con posicion as grups y lo recorremos y se muestra
echo "<ul>";
foreach ($grups as $posicio => $grup):
    echo "<li>Posicio $posicio: $grup</li>";
endforeach;
echo "</ul>";

//ex 2 

//array con tabla
echo "<h1>EX 2</h1>";

$estils = array(
    'Aitana' => 'Pop',
    'Quevedo' => 'Reggaeton',
    'Bad Gyal' => 'Dancehall',
    'Rosalia' => 'Flamenc',
    'Estopa' => 'Rumba'
);

// Tabla

echo "<table border='1'>";
echo "<tr><th>Grup</th><th>Estil musical</th></tr>";
//for each para la tabla 
foreach ($estils as $grup => $estil):
    echo "<tr><td>$grup</td><td>$estil</td></tr>";
endforeach;

// Mostrar el total de grups
echo "<tr><td colspan='2'>Total de grups: " . count($estils) . "</td></tr>";

echo "</table>";

//ex 3
echo "<h1>EX 3</h1>";

echo "<table border='1'>";
echo "<tr><th>Grup</th><th>Estil musical</th></tr>";

reset($estils);

do {
    $grup = key($estils);
    $estil = current($estils);

    echo "<tr><td>$grup</td><td>$estil</td></tr>";

} while (next($estils));

// total
echo "<tr><td colspan='2'>Total de grups: " . count($estils) . "</td></tr>";

echo "</table>";

//me gusta mas el for each mas facil visualmente y para leerlo tambien 

//ex4

echo "<h1>EX 4</h1>";

function recorrerInvers(array $llista) {
    end($llista);

    do {
        echo key($llista) . " => " . current($llista) . "<br>";
    } while (prev($llista));
}

// Mostrar las arrays al reves
echo "<h3>grupo a la inversa</h3>";
recorrerInvers($grups);

echo "<h3>grupo con estilo a la inversa</h3>";
recorrerInvers($estils);

// check arrays
echo "<h3>orden normal de grupo</h3>";
foreach ($grups as $grup) {
    echo "$grup<br>";
}

echo "<h3>orden con estilo de grupo</h3>";
foreach ($estils as $grup => $estil) {
    echo "$grup: $estil<br>";
}

?>

