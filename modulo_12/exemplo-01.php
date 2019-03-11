<?php

    // X - HORIZONTAL Y -> VERTICAL - BIBLIOTECA GD
    header("Content-type: image/png");

    $img = imagecreate(256, 256);
    $black = imagecolorallocate($img, 0, 0, 0);
    $red = imagecolorallocate($img, 255, 0, 0);
    $white = imagecolorallocate($img, 255, 255, 255);
    imagestring($img, 5, 60, 120, "Allan Camargo", $white);
    imagepng($img);

    imagedestroy($img);




?>