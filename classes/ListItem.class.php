<?php
    include_once('Database.class.php');
    
    Class ListItem{
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
        }

        public function insertListItem($list_item_title,$list_item_content,$list_index,$author_id){
            $query = "INSERT INTO list_item (list_id, list_item_title, list_item_content, author_id) VALUES (?,?,?,?)";
            echo $query;
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("issi",$list_index,$list_item_title,$list_item_content,$author_id);
            if($preparedStatement->execute()){
                return $this->connection->insert_id;
            } else{
                die("ERROR WHILE INSERTING STUDENT");
            }
        }

        public function deleteItem($id){
            $query = "UPDATE list_item SET is_deleted = ? WHERE list_item_id = ?";
            echo $query . $id;
            $preparedStatement = $this->connection->prepare($query);
            echo "query preped";
            $preparedStatement->bind_param("ii",1,$id);
            echo "query binned";
            if($preparedStatement->execute()){
                echo "exe";
            }else{
                echo " solve";
            }
            echo "query exe";
        }

        public function getDeatils($list_item_id){
            $result_set = $this->connection->query("SELECT * FROM `list_item`  WHERE list_item_id = $list_item_id");
            return $result_set;
        }

        public function readListItem($list_id){

            $result_set = $this->connection->query("SELECT * FROM `list_item` INNER JOIN author ON list_item.author_id = author.author_id WHERE list_id = $list_id AND list_item.is_deleted = 0");
            return $result_set;
        }
    }
?>