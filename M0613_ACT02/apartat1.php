<?php
echo "<h2>EX 1</h2>";

// 1. Assignació directa
$grups[0] = 'Txarango';
$grups[]  = 'Mushkaa';   // la seguent posició lliure: la 1
$grups[8] = 'Julieta';   // els index no han de ser correlatius
$grups[]  = 'Figa Flawas'; // va a la 9, no a la 2

// 2. Amb la funció array()
$estils = array('Mestissatge', 'Pop urba', 'Rumba');
$capitals = array('Franca' => 'Paris', 'Anglaterra' => 'Londres');

// 3. Cridant una funció que retorna un array
$edicions = range(2019, 2026);
$paraules = explode(' ', 'El festival torna aquest estiu');


//<pre> mostrar el texto respetando los espacios y los saltos de línea
echo "<pre>";
print_r($grups);
print_r($estils);
print_r($edicions);
print_r($paraules);
echo "</pre>";

echo "<pre>";
//muestra los índices y los valores del array
print_r($estils);
//muestra los índices,los valores,los tipos de datos y las longitudes
var_dump($estils);
// muestra el array en un formato parecido al codigo
var_export($estils);
echo "</pre>";

//ex 2
echo "<h2>EX 2</h2>";
// array associatiu
$estilsGrups['Txarango'] = 'Mestissatge';
$estilsGrups['Mushkaa'] = 'Pop urba';

// con array()
$estilsGrups = $estilsGrups + array('Julieta' => 'Pop','Figa Flawas' => 'Pop urba');

// mostrar el estilo por pantalla
echo "El estilo de Txarango es  : " . $estilsGrups['Txarango'] . "<br>";

// metetemos un grupo mas
$estilsGrups['Oques Grasses'] = 'Pop festiu';

// mostrar con print_r

echo "<pre>";
print_r($estilsGrups);
echo "</pre>";

//cuantos grupos hay
echo "Nombre de grups: " . count($estilsGrups);

//ex 3
echo "<h2>EX 3</h2>";
//array de 5 cosas
$grupsEsborrar = array('Txarango', 'Mushkaa', 'Julieta', 'Figa Flawas', 'Oques Grasses');

// mostrar con count
echo "Nombre de grups: " . count($grupsEsborrar) . "<br>";

// borrar el 3 grupo 
unset($grupsEsborrar[2]);

// mostramos la array
print_r($grupsEsborrar);

//aqui con el count
echo "Nombre de grups despres d'esborrar: " . count($grupsEsborrar) . "<br>";

// nuevo grupo
$grupsEsborrar[] = 'Buhos';

//array final 
print_r($grupsEsborrar);

//El index va a fallar porque el unset solo elimina no 
//reenumera osea que intentara el for ver el dos igualmente
?>
