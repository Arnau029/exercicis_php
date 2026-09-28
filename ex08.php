<?php
    $nota = 7.5;

    if($nota >= 9){
        $qualif = 'Execelente';
    }elseif($nota >= 7){
        $qualif = 'notable';
    }elseif($nota >= 5){
        $qualif = 'aprovat';
    }else{
        $qualif = 'suspendido';
    }
    $estoc = 0;
?>
//manera de hacer if else antigua

    <?php if ($estoc > 0 ){ ?>
        <p>en estoc</p>
    <?php } else { ?>
        <p>esgotat</p>
    <?php } ?>

//estadar actual de if else dentro de html

    <?php if ($estoc > 0 ): ?>
        <p>en estoc</p>
    <?php else : ?>
        <p>esgotat</p>
    <?php endif; ?>

<?php
    // if .... endif
    //for .... endfor
    //foreach ... endforeach
    //while .... endwhile

//switch clasic

switch($zona) {
    case 'local':
        $enviament = 0;
        break;
    case 'local':
        $enviament = 4.95;
        break;
    default:
        $enviament = 9.95;
}

//match php 8

$enviament = match ($zona){
    'local'        =>0,
    'peninsula'    =>4.95,
    default        =>9.95,    
};

//for
for($i = 1; $i <= 10; $i++){
    echo $i;
}

//while

while($saldo < $objectiu){
    $saldo *= 1.03;
    $anys++;
}

//do while

do{
    $n = rand(1, 6);
}while($n !== 6);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php for ($i = 0; $i <= 10; $i++): ?>
            <tr>
                <td><?= $i ?> x 7</td>
                <td><?= $i * 7 ?></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>

<?php
    $colors = ['vermell', 'verd', 'blau'];
    echo $colors[0];    //vermell
    echo count($colors);

    $colors[] = 'groc'; //afegeix al final

    print_r($colors);

$producte = [
    'nom' => 'teclat mecanic',
    'preu' => 79.90,
    'estoc' => 4,
];

echo $producte['nom'];
$producte ['preu'] = 69.90;

//nomes els valors
foreach($colors as $color){
    echo "<li>$color</li>";
}

foreach ($producte as $clau => $valor) {
    echo "<dt>$clau</dt>";
    echo "<dd>$valor</dd>";
}
//arrays dins de arrays

$productes = [
    ['nom' => 'teclat', 'preu' => 79.9],
    ['nom' => 'ratoli', 'preu' => 24.5],
    ['nom' => 'teclat', 'preu' => 189],
];

?>
<HTml>
    <table>
    <?php foreach ($productes as $p): ?>
        <tr>
            <td><?= $p['nom']?></td>
            <td><?= $p['preu']?>EUR</td>
        </tr>
    <?php endforeach; ?>
    </table>
</HTml>

<?php
    $alumos = [
    ['alumno' => 'raul', 'curso' => 'daw1', 'edat' => 16,'nota_media' => 7.6],
    ['alumno' => 'jorge', 'curso' => 'daw1', 'edat' => 16,'nota_media' => 8.6],
    ['alumno' => 'nil', 'curso' => 'daw2', 'edat' => 17,'nota_media' => 7.7],
    ['alumno' => 'borja', 'curso' => 'daw2', 'edat' => 16,'nota_media' => 7.5],
    ['alumno' => 'pau', 'curso' => 'daw1', 'edat' => 18,'nota_media' => 4.6],
    ['alumno' => 'eric', 'curso' => 'daw2', 'edat' => 19,'nota_media' => 5.6],
    ['alumno' => 'arnau', 'curso' =>'daw1', 'edat' => 12,'nota_media' => 9.6],
    ['alumno' => 'alejandra', 'curso' => 'daw2', 'edat' => 16,'nota_media' => 5.6],
    ['alumno' => 'kirk', 'curso' =>'daw1', 'edat' => 19,'nota_media' => 6.7],
    ['alumno' => 'marcos', 'curso' => 'daw1', 'edat' => 16,'nota_media' => 4.5],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php foreach ($alumos as $a): ?>
        <tr>
            <td>Nombre: <?= $a['alumno']?> |</td>
            <td>CURSO: <?= $a['curso']?> |</td>
            <td>EDAT: <?= $a['edat']?> |</td>
            <td>NOTA: <?= $a['nota_media']?> |</td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>


        <!--FUNCIONES DE ARRAY QUE TE ESTALVIEN BUCLES-->
<?php
/* 
    count($a); //quants elements te
        count — Counts all elements in an array or in a Countable object
            $a[0] = 1;
            $a[1] = 3;
            $a[2] = 5;
            var_dump(count($a));

            $b[0]  = 7;
            $b[5]  = 9;
            $b[10] = 11;
            var_dump(count($b));

    in_array($p,$a, true); //si un valor hi es (el true fa la comparaio estricta)
            in_array — Checks if a value exists in an array
            $os = array("Mac", "NT", "Irix", "Linux");
            if (in_array("Irix", $os)) {
                echo "Got Irix";
            }
            if (in_array("mac", $os)) {
                echo "Got mac";
            }

    array_key_exists('k', $a); //si una clau existeix
            array_key_exists — Checks if the given key or index exists in the array
            $searchArray = ['first' => 1, 'second' => 4];
            var_dump(array_key_exists('first', $searchArray));

    sort / rsort / ksort // ordena per valor o per clau
            sort — Sort an array in ascending order
            $fruits = array("lemon", "orange", "banana", "apple");s
            sort($fruits);
            foreach ($fruits as $key => $val) {
                echo "fruits[" . $key . "] = " . $val . "\n";
            }
    array_sum(max,min); // suma maxim i minim
            array_sum — Calculate the sum of values in an array
            $a = array(2, 4, 6, 8);
            echo "sum(a) = " . array_sum($a) . "\n";

            $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
            echo "sum(b) = " . array_sum($b) . "\n";
    array_column ($a, 'preu'); // treu una columna d un array d arrays
            array_column — Return the values from a single column in the input array
            $records = [
            [
                'id' => 2135,
                'first_name' => 'John',
                'last_name' => 'Doe',
            ],
            [
                'id' => 3245,
                'first_name' => 'Sally',
                'last_name' => 'Smith',
            ],
            [
                'id' => 5342,
                'first_name' => 'Jane',
                'last_name' => 'Jones',
            ],
            [
                'id' => 5623,
                'first_name' => 'Peter',
                'last_name' => 'Doe',
            ]
        ];

        $last_names = array_column($records, 'last_name', 'id');
        print_r($last_names);
    implode(', ' , $a) / explode //arays a text i text a array
            implode — Join array elements with a string
                $a1 = array("1","2","3");
                $a2 = array("a");
                $a3 = array();
                
                echo "a1 is: '".implode("','",$a1)."'<br>";
                echo "a2 is: '".implode("','",$a2)."'<br>";
                echo "a3 is: '".implode("','",$a3)."'<br>";
*/