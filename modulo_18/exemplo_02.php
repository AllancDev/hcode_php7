<?php

    $id = (isset($_GET["id"])) ? $_GET["id"]:4;

    if(!is_numeric($id) || strlen($id) > 5) {
        exit("Pegamos você! hehe");
    }
        $conn = new mysqli("localhost", "root", "", "dbphp7");
        $sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

        $exec = mysqli_query($conn, $sql);


        while($resultado = mysqli_fetch_object($exec)) {
            var_dump($resultado);
        }

?>