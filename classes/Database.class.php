<?php
	class Database{
		private $host;
		private $username;
		private $password;
		private $database;
		private $connection;
		
		/**
		 * 
		 * use to create default constructer
		 * would init the host name , user name , password and database name
		 * call connectDB function
		 */
		public function __construct(){
			$this->host = "remotemysql.com:3306";
            $this->username = "kkJeRtnUZL";
            $this->password = "oCoSYIDods";
            $this->database = "kkJeRtnUZL";
			$this->connectDB();
		}

		/**
		 * 
		 * NOTE : PHP DOESNT SUPPORTOVERLOADING !
		 * So to manually pass the host name , user name , password and database name use this
		 * Args : host name , user name , password and database name
		 * 
		 */
		
		public function connectionString($host, $username, $password, $database){
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
		
		/**
		 * 
		 * THis method isuse to connect to the db
		 * 
		 */
		public function connectDB(){
			$this->connection = new mysqli($this->host, $this->username, $this->password);
			if( mysqli_connect_error()){
				//if connection is not successful
				die("Connection failed :" . $this->connection->connect_error );
			}
			$db_selected = $this->connection->select_db($this->database);
		}

		/**
		 * 
		 * It is use to run the query and return the result.
		 * Para : sql command
		 * Return : result of sql command
		 * 
		 */
		
		public function query( $sql ){
			$result = $this->connection->query( $sql );
			if( !$result){
				die("query failed : " .$sql);
			}
			return $result;
		}
		
		public function escape_string($string){
			$escaped_string = $this->connection->real_escape_string($string);
			return $escaped_string;
		}

		/**
		 * 
		 * It is use to get the connection object.
		 * Para : none
		 * Rturn : connection object
		 * 
		 */
		
		public function getConnection(){
			return $this->connection;
		}
		
		function __desturct(){
			//this is destructor in php
		}
		
	}
	$database = new Database();
?>