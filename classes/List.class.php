<?php
    include_once('Database.class.php');
    /**
     * 
     * It handle all the query proessing for list
     * 
     */
    Class cardList{

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
         * It is use to get all the list which are not deletedin the database
         * Para : none
         * Retur : result of the query
         * 
         */

        public function readList(){
            $result_set = $this->connection->query("SELECT * FROM list WHERE is_deleted = 0");
            return $result_set;
        }

        /**
         * 
         * It is use to set is_deleted to 1 in database for given list id
         * Para : list id
         * Output : updated the database
         * 
         */

        public function deleteList($list_id){
            $query = "UPDATE list SET is_deleted = 1 WHERE list_id = $list_id";
            $this->connection->query($query);
        }

        /**
         * 
         * It is use to make changes after user edited title
         * Para : list title and id
         * Output : updated the database
         * 
         */

        public function updateList($list_title,$list_id){
            $query = "UPDATE list SET list_title= '$list_title' WHERE list_id = $list_id";
            return $this->connection->query($query);
        }

        /**
         * 
         * It is use to create new list in the database
         * Para : list title
         * Return : inserted id
         * Output : inserted new record in db
         * 
         */

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