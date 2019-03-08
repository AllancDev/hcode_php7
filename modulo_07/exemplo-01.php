<?php
    $Conn = new mysqli("localhost", "root", "", "dbphp7", 3306);

    if($Conn -> connect_error) {
        echo "Error: " . $Conn -> connect_error();
        exit;
    }


    $stmt = $Conn -> prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?, ?)");
    $login = "user";
    $password = md5("123456");

    $stmt -> bind_param("ss", $login, $password);
    $stmt -> execute();

    $login = "root";
    $password = md5("123456");

    $stmt -> execute();
?>