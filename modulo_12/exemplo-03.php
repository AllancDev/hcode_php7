<?php

    $img = imagecreatefromjpeg("./img/certificado.jpg");
    $titleColor = imagecolorallocate($img, 0, 0, 0);
    $gray = imagecolorallocate($img, 100, 100, 100);


    // imagettftext($img, 32, 0, 450, 150, $titleColor, __DIR__ . "/fonts/Bevan/Bevan-Regular.ttf", "Certificado");

    imagettftext($img, 32, 0, 450, 150, $titleColor, __DIR__ . DIRECTORY_SEPARATOR . "fonts". DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");
    imagettftext($img, 32, 0, 440, 350, $titleColor, __DIR__ . DIRECTORY_SEPARATOR ."fonts". DIRECTORY_SEPARATOR ."Playball". DIRECTORY_SEPARATOR ."Playball-Regular.ttf", "Allan Camargo");
    imagestring($img, 5, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

    header("Content-type: image/jpeg");

    imagejpeg($img);


    imagedestroy($img);

    // echo  __DIR__ . DIRECTORY_SEPARATOR . "fonts". DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf";


?>