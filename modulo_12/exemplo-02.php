<?php

    $img = imagecreatefromjpeg("./img/certificado.jpg");
    $titleColor = imagecolorallocate($img, 0, 0, 0);
    $gray = imagecolorallocate($img, 100, 100, 100);

    imagestring($img, 5, 450, 150, "CERTIFICADO", $titleColor);
    imagestring($img, 5, 440, 350, "Allan Camargo", $titleColor);
    imagestring($img, 5, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

    header("Content-type: image/jpeg");

    imagejpeg($img, "certificado-" . date("d-m-Y"));


    imagedestroy($img);




?>