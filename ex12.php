<?php
    //declarar que sea restrictivo
    declare(strict_types=1); //siempre primera linea
    // declarar i cridar //
    function peu(): void{
        echo '<footer> .... </footer>';
    }
    //crida
    peu();
    peu();
    peu();
    //s'executa tres vegada
    function targeta(string $nom, float $preu, int $estoc): void
   {
        echo "<h3>$nom</h3><p>$preu EUR . $estoc unitats</p>";
    }
    targeta('Teclat mecanic',79.90,4); //ordre importa!

    function preuAmbIva(
        float $base,
        float $iva = 0.21 //valor per defecte
    ): float {
        return round($base *(+ $iva),2);
    }

    preuAmbIva(100);        //121
    preuAmbIva(100, 0.10); //110

    //parte restrictiva 
        //sense strick_types
    area('3', 4.0);
    //php converteix i no es queixa

    $botiga = 'bitbbazzar'; //vaiable global

    function mostrar(): string{
        return 'son a ' . $botiga; //error, no pot accedir a variable global
    }

    //warning, undefined variable

    //variable local normal
    function compta(): int{
        $n = 0;
        $n++;
        return $n;
    }
    // 1, 1, 1

    //variable static
    function compta2(): int{
        static  $n = 0;
        $n++;
        return $n;
    }
    // 1, 2, 3

    //rep un array, torna un valor
    function valorEstoc(array $p): float
    {
        $total = 0.0;
        foreach ($p as $item){
            $total += $item['preu'];
        }
        return $total;
    }

    //rep un array,torna un array
    function disponible(array $p): array{
        $res =[];
        foreach ($p as $item){
            if($item['estoc'] > 0){$res[] = $item;}
        }
        return $res;
    }