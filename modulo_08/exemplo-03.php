<?php

    $Conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $stmt = $Conn -> prepare("UPDATE tb_usuarios SET deslogin = :login, dessenha = :password WHERE idusuario = :id");
    $login = "Camarguinho";
    $password = md5("123456");
    $id = 5;

    $stmt -> bindParam(":login", $login);
    $stmt -> bindParam(":password", $password);
    $stmt -> bindParam(":id", $id);

    $stmt -> execute();





?>