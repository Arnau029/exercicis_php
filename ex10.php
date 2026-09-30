<?php
    //definicion de una funcion
    // function nomFuncion($arg1, $arg2){
        //codigo de la funcion
        //return valor o no;
    //}

    function funcTest(){
        $var = 10;
        return $var;
    }

    //como la funcion funcTest tiene un return tengo
    //que igualarla a una varible para recoger el valor del return

    $var_fun = funcTest();
    echo "La variable igualda a la funcion vale: " . $var_fun;

    echo "<br>";
    // funcion sin return

    function funcionTestSin(){
        $var = 20;
        echo "La variable dentro de la funcion vale $var";
    }

    funcionTestSin();

    // como podemos utilixar dentro de las funciones variables locales
    $var2 = 50;
    function funcConGlobal(){
        //Para poder utilizar una variable de fuera del ambito 
        //de la funcion se utilixa la palabra reservada global

        global $var2;
        echo "La variable var 2 de fuera de la funcion vale: $var2";
    }
    
    echo "<br>";
    funcConGlobal();


    // RECURSIVIDAD --> UNA FUNCION SE PUEDE LLAMAR A SI MISMA
    function factorial($numero){
        if($numero == 1){
            return $numero;
        }
        else{
            return $numero * factorial($numero - 1);
        }
    }
    echo "<br>";

    echo "El factorial de 7 es: ". factorial(7) ."<br>";
?>