<?php 


class connectiondb 
 {
 	private $conn;
 	
 	private function __construct()
 	{
 		$this->conn = mysqli_connect('localhost', 'ahmedBahaa', 'test1234', 'test1');

		if (!$conn)
			{
			echo 'connection error'.  mysqli_connect_error();
			} 	
			//echo "connection successful";
	}

	public function GetConnection()
	{
		static  $object = null;

		if ($object == null)
		{
			
		  $object = new connectiondb();

			
		}
		return $this->conn;
	}
}
?>
   