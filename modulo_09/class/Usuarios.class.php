<?php

    class Usuarios extends Sql {
        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

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
                $row = $results[0];

                $this -> setIdUsuario($row['idusuario']);
                $this -> setDeslogin($row['deslogin']);
                $this -> setDesSenha($row['dessenha']);
                $this -> setDtCadastro(new DateTime($row['dtcadastro']));
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
                $row = $results[0]; 
                $this -> setIdUsuario($row['idusuario']);
                $this -> setDesLogin($row['deslogin']);
                $this -> setDesSenha($row['dessenha']);
                $this -> setDtCadastro(new DateTime($row['dtcadastro']));
            }  else {
                throw new Exception("Login e/ou senha inválidos.");
            }
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