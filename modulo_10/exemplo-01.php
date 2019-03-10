<?php


    $name = "img";

    if(!is_dir($name)) {
        mkdir($name); // Adicionando um diretorio
        echo $name . " criado com sucesso!";
    } else {
        // rmdir($name); Removendo diretorio
        echo "Diretorio já existe!";

    }

?>