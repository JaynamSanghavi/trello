<?php
	include_once("Database.class.php");
	include_once ("Session.class.php");
	require_once ("Functions.class.php");
	class User{

        /**
         * 
         * It handle all the query proessing for user
         * 
        */
        private $connection;

        /**
         * 
         * Constructor is use to get the connection object
         * and also start the session
         */

		public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
            Session::startSession();
        }

        /**
         * 
         * It is use to create new user in the database
         * Para : user name and password
         * Return : inserted id
         * Output : inserted new record in db
         * 
         */

        public function insertuser($username,$password){
            $hashpass = hash("md5",$password);
            $query = "INSERT INTO author (author_name, author_password) VALUES (?,?)";
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("ss",$username,$hashpass);
            if($preparedStatement->execute()){
                return $this->connection->insert_id;
            } else{
                die("ERROR WHILE INSERTING Author ");
            }
        }

        /**
         * 
         * It is used when user logout
         * clear all the session variable and destroy the session
         * 
         */

        public function user_logout(){
			$_SESSION['login'] = 0;
            $_SESSION['author_name'] = null;
            $_SESSION['author_id']  = null;
			session_destroy();
        }
        
        /**
         * 
         * It is use to check if user entered a valid username and password
         * Para: username and password
         * Return : if valid then true else false
         *  
         */

        public function processLogin( $username, $password){
            $query = "SELECT * FROM author WHERE author_name = ?";
            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("s", $username);
            $preparedStatement->execute();
            $preparedStatement->store_result();
			$count = $preparedStatement->num_rows;
			if($count >= 1 ){
                $preparedStatement->bind_result($author_id, $author_name, $author_password, $author_picture, $created_at, $is_deleted, $deleted_at);
                $preparedStatement->fetch();
                if(hash("md5",$password) === $author_password){
					$_SESSION['login'] = 1;
					$_SESSION['author_name'] = $author_name;
					$_SESSION['author_id']  = $author_id;
					return true;
				}else{
					return false;
				}
                return true;
            }else{
                return false;
            }

        }
    }
?>