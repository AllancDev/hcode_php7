<?php

    $Conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "", ATTR_ERRMODE);

    $stmt = $Conn -> prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (:login, :password)");
    $login = "Allan Camargo";
    $password = md5("123456");

    $stmt -> bindParam(":login", $login);
    $stmt -> bindParam(":password", $password);

    $stmt -> execute();





?>