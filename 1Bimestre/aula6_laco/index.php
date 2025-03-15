<?php

    // while, do while, for

    // exemplo com laço for

    for($i=0;$i<=10;$i++) {
        echo "<p style='color:#00f'> $i </p>";
    } 

    // exemplo com laço while

    echo "<br/> <br/>";

    $numero = 8;
    $contador = 0;

    while ($contador <11) {
        // tabuada
        echo "<p> $numero * $contador = ".($numero*$contador)."</p>";
        $contador++;
    }

    echo "<br/> <br/>";

    // exemplo com laço do while

    $cont = 15;
    do {
        echo "$cont";
        $cont--;
    } while ($cont>=0);

    echo "<br/> <br/>";

    // -------------------------

    // Array

    //declaração do vetor
    $vetor = Array();

    //atribuição de valores
    $vetor[0] = "morango";
    $vetor[1] = "banana";
    $vetor[2] = "uva";
    $vetor[3] = "jaca";
    $vetor[4] = "coco";
    $vetor[5] = "maracujá";

    //exibição dos elementos

    for ($j=0;$j<count($vetor);$j++){

        echo "$vetor[$j] <br/>";
    }
    // o count é para pegar o tamanho do vetor, no JAVA seria equivalente ao .lenght
?>