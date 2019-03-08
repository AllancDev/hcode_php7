<?php
    require_once "./interfaces/Veiculo.php";
    class Veiculo implements Veiculos {
        public function acelerar($velocidade) {
            echo "O veiculo acelerou até " . $velocidade . " km/h";
        }

        public function frenar($velocidade) {
            echo "O veiculo frenou até " . $velocidade . " km/h";
        }

        public function trocarMarcha($marcha) {
            echo "O veiculo engatou a marcha " . $marcha;
        }
    }

?>