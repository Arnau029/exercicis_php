<?php
    //funciones preestablecidas de php
    //  isset() ---> permite saber si una variable 
    //  existe en nuestro programa
    
    // unset() --> liberar espacio en memoria de una variable

    $var = "10";

    if(isset($var)){
        echo"La variable $var existe";
    }

    unset($var);

    if(isset($var)){
        echo"La variable $var existe";
    }else{
        echo"La variable $var no existe";
    }

    //  gettype() --> nos retorna el tipo de variable que pasamos por parametro

    //settype() --> asignamos un tipo de dato a la variable que pasamos por parametro 

    //empty() --> funcion q mira si una variable si esta vacio no exite o su valor es 0

    //is_integer(), is_double(var), is_array(var) is_string(var) --> para saber si una variable
    // es integer,doublle,string,array,etc

    //EX1:FOR PARA LA TABLA DE MULTIPLICAR DEL 5
    //CHECK QUE LA VARIABLE EXISTE CON EMPTY
    $tabla = 5;
    echo "<br>";
    echo "Tabla del $tabla";
    echo "<br>";

    if (isset($tabla)) {
    for ($i = 0; $i <= 10; $i++) {
        echo "$tabla x $i = " . ($tabla * $i) . "<br>";
        }
    } else {
        echo "Variable no existe";
    }

    //EX2: MOSATRAR LOS PARES DEL 1 AL 1000
    echo "<br>";
    echo "Pares de 1 al 100";
    echo "<br>";
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 2 == 0) { 
            echo "Numero Par $i";
            echo "<br>";
        }
    }

    //EX3: DIBUJA UNA TABLA HTML DONDE SALGA LAS TABLAS DE MULTIPLICAR DEL 1 AL 10

    $numerota = 1;
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <table>
                <tr>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                    <th>
                        <?= "Tabla del $i"?>
                    </th>
                    <?php endfor; ?>
                </tr>
                <?php for ($t = 1; $t <= 10; $t++): ?>
                <tr>
                    <?php for ($m = 1; $m <= 10; $m++): ?>
                        <td > 
                            <?php echo "$t x $m =  " . $t * $m ?>
                        </td>
                    <?php endfor; ?>
                </tr>
                <?php endfor; ?>
        </table>
    </body>
</html>