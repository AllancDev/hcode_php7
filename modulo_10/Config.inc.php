<?php

    spl_autoload_register(function($nameClass) {
        $filename = __DIR__ . DIRECTORY_SEPARATOR . "class" . DIRECTORY_SEPARATOR .$nameClass . ".class.php";
        if(file_exists($filename)) {
            require_once($filename);
        }
    });

?>