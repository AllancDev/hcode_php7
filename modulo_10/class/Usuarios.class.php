<?php

    class Usuarios extends Sql {
        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;


        public function __construct($login = "", $password = "") {
            $this -> setDesLogin($login);
            $this -> setDesSenha($password);
        }

        public function setIdUsuario($idusuario) {
            $this -> idusuario = $idusuario;
        }

        public function getIdUsuario() {
            return $this -> idusuario;
        }

        public function setDeslogin($deslogin) {
            $this -> deslogin = $deslogin;
        }

        public function getDesLogin() {
            return $this -> deslogin;
        }

        public function setDesSenha($dessenha) {
             $this -> dessenha = $dessenha;
        }

        public function getDesSenha() {
            return $this -> dessenha;
        }

        public function setDtCadastro($dtcadastro) {
            $this -> dtcadastro = $dtcadastro;
        }

        public function getDtCadastro() {
            return $this -> dtcadastro;
        }

        public function loadById($id) {
            $sql = new Sql();
            $results = $sql -> select("SELECT * FROM tb_usuarios WHERE idusuario = :id", array(
                ":id" => $id
            ));

            if(count($results) > 0) {
                $this -> setData($results[0]);

            }
        }

        public static function getList() {
            $sql = new Sql();
            return $sql -> select("SELECT * FROM tb_usuarios ORDER BY deslogin");
        }


        public static function search($login) {
            $sql = new Sql();

            return $sql -> select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :search ORDER BY deslogin", array(
                ":search" => "%" . $login . "%"
            ));
        }

        public function login($login, $password) {
            $sql = new Sql();

            $results = $sql -> select("SELECT * FROM tb_usuarios WHERE deslogin = :login AND dessenha = :password", array(
                ":login" => $login,
                ":password" => $password
            ));

            if(count($results) > 0) {

                $this -> setData($results[0]);

            }  else {
                throw new Exception("Login e/ou senha inválidos.");
            }
        }

        public function setData($data) {
            $this -> setIdUsuario($data['idusuario']);
            $this -> setDesLogin($data['deslogin']);
            $this -> setDesSenha($data['dessenha']);
            $this -> setDtCadastro(new DateTime($data['dtcadastro']));
        }


        public function insert() {
            $sql = new Sql();
            $results = $sql -> select("CALL sp_usuarios_insert(:login, :password)", array(
                ":login" => $this -> getDeslogin(),
                ":password" => $this -> getDesSenha()
            ));

            if(count($results) > 0) {
                $this -> setData($results[0]);
            }
        }


        public function update($login, $password) {
            $this -> setDesLogin($login);
            $this -> setDesSenha($password);

            $sql = new Sql();
            $sql -> query("UPDATE tb_usuarios SET deslogin = :login, dessenha = :password WHERE idusuario = :id", array(
                ":login" => $this -> getDesLogin(),
                ":password" => $this -> getDesSenha(),
                ":id" => $this -> getIdUsuario()
            ));
        }

        public function delete() {
            $sql = new Sql();

            $sql -> query("DELETE FROM tb_usuarios WHERE idusuario = :id", array(
                ":id" => $this -> getIdUsuario()
            ));

            $this -> setIdUsuario(0);
            $this -> setDesLogin("");
            $this -> setDesSenha("");
            $this -> setDtCadastro(new DateTime());
        }

        public function __toString() {
            return json_encode(array(
                "idusuario" => $this -> getIdUsuario(),
                "deslogin" => $this -> getDesLogin(),
                "dessenha" => $this -> getDesSenha(),
                "dtcadastro" => $this -> getDtCadastro() -> format("d/m/Y H:i:s")
            ));
        }



    }

?>