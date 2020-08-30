<?php
    class Database{
        //Database parameters
        private $host = "localhost";
        private $db_name ="movie_tickets";
        private $username = "root";
        private $password = "123456";
        private $connection;
        public function connect(){
            $this->connection = NULL;
            try{
                $this->connection = NEW PDO('mysql:host='.$this->host.';dbname='.$this->db_name, $this->username, $this->password);
                $this->connection->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo 'Connecton error: ' . $e->getMessage();
            }
            return $this->connection;
        }
    }
?>