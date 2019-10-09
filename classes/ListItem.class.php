<?php
    include_once('Database.class.php');
    
    Class ListItem{
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
        }

        public function insertListItem($list_item_title,$list_item_content,$list_index,$author_id){
            $query = "INSERT INTO list_item (list_id, list_item_title, list_item_content, author_id) VALUES (?,?,?,?)";
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("issi",$list_index,$list_item_title,$list_item_content,$author_id);
            if($preparedStatement->execute()){
                return $this->connection->insert_id;
            } else{
                die("ERROR WHILE INSERTING STUDENT");
            }
        }

        public function readListItem($list_id){
            $result_set = $this->connection->query("SELECT * FROM `list_item` INNER JOIN author ON list_item.author_id = author.author_id WHERE list_id = $list_id");
            return $result_set;
        }
    }
?>