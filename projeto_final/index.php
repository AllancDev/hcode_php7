<?php
    require_once("./vendor/autoload.php");

    $app = new \Slim\Slim();
    use \nexti\Page;
    $app -> config('debug', true);
    $app -> get("/", function(){
        $page = new Page();
        $page -> setTpl("index");
        //echo $_SERVER["DOCUMENT_ROOT"] . "/_courses/hcode_php_7/projeto_final/views/";
    });

    $app -> run();

?>