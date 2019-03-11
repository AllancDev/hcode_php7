<?php

    require_once("./vendor/autoload.php");

    $app = new \Slim\Slim();


    $app -> get("/", function() {
        echo json_encode(array(
            "date_modified" => date("d/m/Y")
        ));
    });

    $app -> get('/hello/:name', function($name) {
        echo "Hello, " . $name;
    });

    $app -> run();


?>