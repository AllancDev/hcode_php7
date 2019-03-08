<?php

    $frutas = array("Laranja", "Banana", "Morango");
    print_r($frutas);

    echo "<br />-----------------------------------<br />";

    $carros[0][0] = "GM"; 
    $carros[0][1] = "Cobalt"; 
    $carros[0][2] = "Onix"; 
    $carros[0][3] = "Camaro"; 


    $carros[1][0] = "Ford";
    $carros[1][1] = "Fiesta";
    $carros[1][2] = "Eco Sport";

    print_r($carros);

    echo "<br /> ----------------------------------------------------------- <br />";

    $pessoas = array();
    array_push($pessoas, array(
        "nome" => "Allan",
        "idade" => 20
    ));

    print_r($pessoas);

?>