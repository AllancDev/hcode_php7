<?php
    // CLASSE = UMA CAIXA QUE VOCÊ TEM TUDO DENTRO DELA
    // ATRIBUTOS = VARIAVEIS DENTRO DO CONTEXTO DA CLASSE
    // METODOS = FUNCTION DENTRO DO CONTEXTO DA CLASSE
    // OBJETO = UMA VARIAVEL QUE REPRESENTA UMA CLASSE -> INSTANCIA

    require_once "./class/Pessoa.class.php";

    $People = new Pessoa();
    $People -> nome = "Allan Cristian";
    echo $People -> falar();
?>