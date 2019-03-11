<?php

    error_reporting(E_ALL & ~E_NOTICE); // Não exibir erros na produção

    $nome = $_GET["nome"];
    echo $nome;

?>