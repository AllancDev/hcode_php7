<?php

    $Conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $stmt = $Conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = :id");

    $id = 5;
    $stmt -> bindParam(":id", $id);

    $stmt -> execute();





?>