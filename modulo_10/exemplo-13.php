<?php
    $data = array(
        "empresa" => "Selftech Serviços TI"
    );

    setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

    echo "OK";

?>