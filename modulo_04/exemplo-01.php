<?php


    function aumentoSalario($salario) {
        $aumento = 5*($salario/100);
        echo "Aumento de salario em " . ($aumento + $salario);
    }

    echo aumentoSalario(5000);


?>