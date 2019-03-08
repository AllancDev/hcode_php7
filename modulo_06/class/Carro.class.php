<?php
    class Carro {
        private $modelo; // Modelo
        private $motor; // Motor
        private $ano; // Ano


        public function getModelo() {
            return $this -> modelo;
        }

        public function setModelo($modelo) {
            $this -> modelo = $modelo;
        }

        public function getMotor() {
            return $this -> modelo;
        }

        public function setMotor($motor) {
            $this -> motor = $motor;
        }

        public function getAno() {
            return $this -> ano;
        }

        public function setAno($ano) {
            $this -> ano = $ano;
        }


        public function exibir() {
            return array(
                "modelo" => $this -> getModelo(),
                "motor" => $this -> getMotor(),
                "ano" => $this -> getAno()
            );
        }
    }


?>