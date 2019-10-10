<?php
    include_once('Database.class.php');
    /**
     * 
     * It handle all the query proessing for list item
     * 
     */
    Class ListItem{

        /**
         * 
         * Constructor is use to get the connection object
         * 
         */

        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
        }

        /**
         * 
         * It is use to create new list item in the database
         * Para : list item title , list item content , list index and author id
         * Return : inserted id
         * Output : inserted new record in db
         * 
         */

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

        /**
         * 
         * It is use to set is_deleted to 1 in database for given list item id
         * Para : list item id
         * Output : updated the database
         * 
         */

        public function deleteItem($id){
            $query = "UPDATE list_item SET is_deleted = 1 WHERE list_item_id = $id";
            $this->connection->query($query);
        }

        /**
         * 
         * It is use to make changes after user edited title or content
         * Para : list item title , content and id
         * Output : updated the database
         * 
         */


        public function updateListItem($list_item_title,$list_item_content,$list_item_id){
            $query = "UPDATE list_item SET list_item_title= '$list_item_title' ,list_item_content= '$list_item_content' WHERE list_item_id = $list_item_id";
            $this->connection->query($query);
        }

        /**
         * 
         * It is use to get all the list item which are not deleted in the database and having same list id
         * Para : list id
         * Retur : result of the query
         * 
         */

        public function readListItem($list_id){

            $result_set = $this->connection->query("SELECT * FROM list_item INNER JOIN author ON list_item.author_id = author.author_id WHERE list_id = $list_id AND list_item.is_deleted = 0");
            return $result_set;
        }
    }
?>