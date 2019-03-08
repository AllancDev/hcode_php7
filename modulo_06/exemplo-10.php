<?php
    require_once("./Config.inc.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();
    $cad -> setNome("Allan Camargo");
    $cad -> setEmail("allan.cdev@gmail.com");
    $cad -> setSenha("Selftech");
    
    echo $cad -> registrarVenda();

?>