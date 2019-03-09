<?php
    require_once("./Config.inc.php");

    // Carrega um usuario
        // $root = new Usuarios();
        // $root -> loadById(4);
        // echo $root;

    // Carrega Lista inteira de usuarios
        // $list = Usuarios::getList();
        // echo json_encode($list);

    // Carrega uma lista de usuarios buscando pelo login
        // $search = Usuarios::search('a');
        // echo json_encode($search);


    // Carrega um usuario carregando o login e a senha
        // $Usuario = new Usuarios();
        // $Usuario -> login("user", "e10adc3949ba59abbe56e057f20f883e");
        // echo $Usuario;


    $aluno = new Usuarios();
    $aluno -> setDeslogin("YoUOn");
    $aluno -> setDesSenha("YOnSia");

    $aluno -> insert();

    echo $aluno;

?>