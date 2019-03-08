<?php


    require_once "./class/Documento.class.php";

    $doc = new Documento();
    $doc -> setNumero("09492594978");
    var_dump($doc);

    echo strlen("09492594978");

?>