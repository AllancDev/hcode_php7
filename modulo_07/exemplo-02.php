<?php

    $Conn = new mysqli("localhost", "root", "", "dbphp7", 3306);
    

    if($Conn -> connect_error) {
        echo "Error: " . $Conn -> connect_error();
        exit;
    }

    $result = $Conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");

    $data = array();

    while($row = $result -> fetch_assoc()) {
        array_push($data, $row);
    }

    echo json_encode($data);


?>