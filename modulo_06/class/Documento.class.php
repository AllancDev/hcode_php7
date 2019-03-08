<?php

    class Documento {
        private $numero;

        public function setNumero($numero) {
            $resultado = Documento::validarCPF($numero);
            if($resultado == false) {
                throw new Exception("CPF não é valido...");
            }

            $this -> numero = $resultado;
        }

        public function getNumero() {
            return $this -> numero;
        }

        public static function validarCPF($cpf) {
            if(empty($cpf)) return false;

            $cpf = preg_replace('[^0-9]', '', $cpf);
            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

            if(strlen($cpf) != 11) {
                return false;
            } else if($cpf == "000000000000" || 
                $cpf == "111111111111" ||
                $cpf == "222222222222" ||
                $cpf == "333333333333" ||
                $cpf == "444444444444" ||
                $cpf == "555555555555" ||
                $cpf == "666666666666" ||
                $cpf == "777777777777" ||
                $cpf == "888888888888" ||
                $cpf == "999999999999" 
            ) {
                return false;
            } else {
                for($t = 9; $t < 11; $t++ )  {
                    for($d = 0, $c = 0; $c < $t; $c++ ) {
                        $d += $cpf{$c} * (($t + 1 ) - $c);
                    }
                    $d = ((10 * $d) % 11 ) % 10;
                    if($cpf{$c} != $d) {
                        return false;
                    }

                }

                return true;
            }

        }
    }


?>