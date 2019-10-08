<?php
    include_once('Database.class.php');
    Class cardList{
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
        }

        public function readList(){
            $result_set = $this->connection->query("SELECT * FROM list WHERE is_deleted = 0");
            return $result_set;
        }

    }
?>