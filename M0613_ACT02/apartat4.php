
<?php
//copia conciertos ex 1
$concerts = [
    ['nom' => 'Oques Grasses',  'escenari' => 'Gran',  'hora' => '22:30', 'assistents' => 4200, 'preu' => 28.0],
    ['nom' => 'Mushkaa',        'escenari' => 'Petit', 'hora' => '20:00', 'assistents' => 1850, 'preu' => 18.0],
    ['nom' => 'Figa Flawas',    'escenari' => 'Gran',  'hora' => '00:30', 'assistents' => 3600, 'preu' => 24.0],
    ['nom' => 'Julieta',        'escenari' => 'Petit', 'hora' => '21:15', 'assistents' => 2100, 'preu' => 20.0],
    ['nom' => 'Txarango',       'escenari' => 'Gran',  'hora' => '23:30', 'assistents' => 5100, 'preu' => 32.0],
    ['nom' => 'La Ludwig Band', 'escenari' => 'Petit', 'hora' => '18:45', 'assistents' => 900,  'preu' => 15.0],
];

//tabla
echo "<table border='1'>";
//pues los th que va a tener la tabla
echo "<tr><th>Nom</th><th>Escenari</th><th>Hora</th><th>Assistents</th><th>Preu</th></tr>";

//aqui recorremos y mosrtamos el nom,escenari,hora,assistents y formateamos el preu para que muestre con 2 decimales
foreach ($concerts as $concert):
    echo "<tr>";
    echo "<td>" . $concert['nom'] . "</td>";
    echo "<td>" . $concert['escenari'] . "</td>";
    echo "<td>" . $concert['hora'] . "</td>";
    echo "<td>" . $concert['assistents'] . "</td>";
    //formateo precio
    echo "<td>" . number_format($concert['preu'], 2, ',', '') . " €</td>";
    echo "</tr>";
endforeach;

//fin de la tabla
echo "</table>";

//3 corcierto directo
echo "El tercer concert es: " . $concerts[2]['nom'];

//ex 2

$escenaris = [
    'Gran' => [
        'capacitat' => 6000,
        'coberta' => 'no',
        'ubicacio' => 'Pista central',
    ],
    'Petit' => [
        'capacitat' => 2500,
        'coberta' => 'sí',
        'ubicacio' => 'Pavelló',
    ],
];

echo "<br>";
// monstramos la array escenari pillado el grande y capacidad
echo "Capacitat de l'escenari Gran: " . $escenaris['Gran']['capacitat'] . "<br><br>";

//recorremos escenario vemos que hay gran y petit y reccoremos otra vez para mostrar los valores
foreach ($escenaris as $nom => $dades):
    echo "<h2>$nom</h2>";
    foreach ($dades as $camp => $valor):
        echo "$camp: $valor<br>";
    endforeach;
endforeach;


//Estos ex fueron bastantes malos vale que aprendemos lo que pedistes pero siento
//que con ex diferentes en el cliquedu osea separados estaria mejor como ya estabamos haciendo en clase 
?>
