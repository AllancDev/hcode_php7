<?php
    require_once("./Config.inc.php");

    $root = new Usuarios();
    $root -> loadById(4);

    echo $root;

?>