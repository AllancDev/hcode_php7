<?php

    // pegar conteudo de um arquivo file_get_contents

    $link = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";


    $content = file_get_contents($link);
    $parse = parse_url($link);


    $basename = basename($parse["path"]);

    $file = fopen($basename, "w+");
    fwrite($file, $content);

    fclose($file);

    // var_dump($content);

?>


<img src = "<?=$basename ?>" />