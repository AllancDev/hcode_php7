<?php

    class Endereco {
        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($logradouro, $numero, $cidade) {
            $this -> setLogradouro($logradouro);
            $this -> setNumero($numero);
            $this -> setCidade($cidade);
        }

        public function __destruct() {
            echo "DESTRUIR";
        }

        public function setLogradouro($logradouro) {
            $this -> logradouro = $logradouro;
        }

        public function getLogradouro() {
            return $this -> logradouro;
        }

        public function setNumero($numero) {
            $this -> numero = $numero;
        }

        public function getNumero() {
            return $this -> numero;
        }

        public function setCidade($cidade) {
            $this -> cidade = $cidade;
        }

        public function getCidade() {
            return $this -> cidade;
        }
    } 

?>