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

        public function insertList($list_title){
            $query = "INSERT INTO list(list_title) VALUES (?)";
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("s",$list_title);
            if($preparedStatement->execute()){
                return $this->connection->insert_id;
            } else{
                die("ERROR WHILE INSERTING STUDENT");
            }
        }

    }
?>