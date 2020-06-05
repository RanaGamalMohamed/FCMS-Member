<?php  


class DataBase {
	private $_connection;
	private static $_instance; //The single instance
	private $_host = 'localhost';
	private $_username = 'ahmedBahaa';
	private $_password = 'test1234';
	private $_database = 'test1';


	public static function getInstance() {
		static $id=1;

		if(!self::$_instance) { 
			self::$_instance = new self();
			
				echo " Instance$id";
				$id=1+$id;

		}
		return self::$_instance;
	}

	private function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	
		if(mysqli_connect_error()) {
			echo "ERROR ACCCUIRED";
		}
	}

	private function __clone() { }

	 public function getConnection() {
		echo" get connction";
		return $this->_connection;
	}
}



   	$conn = DataBase::getInstance();

		$conn->getConnection();  

		 ?>