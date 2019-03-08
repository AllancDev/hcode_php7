<?php

    require_once "./class/Pessoas.class.php";
    $Pessoas = new Pessoas();
    $Pessoas -> verDados();
    $Pessoas -> senha;


    // PUBLICO -> TODO MUNDO ACESSA
    // PRIVADO -> SOMENTE A CLASSE CONSEGUE ACESSAR
    // PROTECTED -> A CLASSE E SUAS SUB CLASSES
?>