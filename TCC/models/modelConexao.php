<?php
    class Conexao{
        public function Conecta(){
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'db_batata_forms';
            return mysqli_connect($host,$user,$pass,$db);
        }
    }
?>