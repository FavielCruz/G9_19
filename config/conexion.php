<?php
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                $conectar = $this->dbh = new PDO("mysql:host=34.68.196.220;dbname=g9_19","G9_19","aSn2e4ri");//code...
                return $conectar;
            } catch (Exception $e) {
                print "¡Error DB!: " . $e->getMessage() . "<br/>";//throw $e;
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>