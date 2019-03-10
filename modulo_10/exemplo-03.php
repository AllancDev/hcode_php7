<?php

    $file = fopen("log.txt", "a+"); // w+ vai criar um novo txt

    fwrite($file, date("Y-m-d H:i:s") . "\n\t");
    fclose($file);

    echo "Arquivo criado com sucesso!";


?>