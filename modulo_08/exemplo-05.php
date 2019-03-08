<?php
    $Conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $Conn -> beginTransaction();
    $stmt = $Conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

    $id = 2;

    $stmt -> execute(array($id));
    // $Conn -> rollback();
    echo "Delete OK";
    $Conn -> commit();

?>