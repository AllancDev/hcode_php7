<?php
    namespace nexti\db;

    Class Conn {
        const hostname = "127.0.0.1";
        const username = "root";
        const password = "";
        const db_name = "db_ecommerce";

        private $Conn;

        public function __construct() {
            $this -> Conn = new \PDO( "mysql:dbname=" . Conn::db_name . ";host=" . Conn::hostname, Conn::username, Conn::password );
        }

        private function setParams($statement, $parameters = array() ) {
            foreach($parameters as $key => $value) {
                $this -> bindParam($statement, $key, $value);
            }
        }

        private function bindParam($statement, $key, $value) {
            $statement -> bindParam($key, $value);
        }

        public function query($rawQuery, $params = array()) {
            $stmt = $this -> Conn -> prepare($rawQuery);
            $this -> setParam($stmt, $params);
            $stmt -> execute();
        }

        public function select($rawQuery, $params = array() ):array {
            $stmt = $this -> Conn -> prepare($rawQuery);
            $this -> setParams($stmt, $params);
            $stmt -> execute();
            return $stmt -> fetchAll(\PDO::FETCH_ASSOC);
        }
    }

?>