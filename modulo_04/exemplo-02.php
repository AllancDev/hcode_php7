<?php

    $a = 10; 

    function trocaValor(&$a) { // & Passagem de valor por referencia altera a variavel fora do escopo da function
        $a += 50;
        return $a;
    }


    echo trocaValor($a);
    echo "<hr />";
    echo $a;
?>