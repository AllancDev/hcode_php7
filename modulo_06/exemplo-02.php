<?php
    require_once "./class/Carro.class.php";

    $Carro = new Carro();
    $Carro -> setModelo("Ford");
    $Carro -> setMotor("V8");
    $Carro -> setAno(2018);

    print_r($Carro -> exibir());

?>