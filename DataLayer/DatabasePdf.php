<?php
   include('connectdb.php');



class DataBase{


  public function __construct()
  {
  }


//Select All Data
static function selectAll($tablename)
{

  $connectdb  = connectdb::getInstance();

  $conn = $connectdb->getConnection();

      $query = "SELECT * FROM $tablename";
 				
	    $result = mysqli_query($conn,$query);
	   if($bool = mysqli_affected_rows($conn) >= 1)
	
	//	echo "<br>"."Affected rows: " . mysqli_affected_rows($conn)."<br>";
		  	$arrayOfResult = mysqli_fetch_all( $result ,MYSQLI_ASSOC);
     
     if( $bool >= 1)
	 {
	return $arrayOfResult;
	 }
	else
	 {
		return 0; 
    }
  }

   //Select Record	
  static function selectRecord($tablename,$id,$value){
       
	       $connectdb  = connectdb::getInstance();

          $conn = $connectdb->getConnection();


  	   
	   $query = "SELECT * FROM $tablename where $id= $value";

	   $result = mysqli_query($conn,$query);

	   $array = mysqli_fetch_all( $result , MYSQLI_ASSOC);
	//echo 	$conn->rowcount() ."<br>";


	return $array;
}
//Delete 

  static function deletefunction($tablename,$id,$value){
          
     
  $connectdb  = connectdb::getInstance();

  $conn = $connectdb->getConnection();
            
             $sql = "DELETE FROM $tablename WHERE $id=$value";
                    
             if (mysqli_query($conn, $sql)) {
                echo "Record deleted successfully";
             } else {
                echo "Error deleting record: " . mysqli_error($conn);
             }
                

            }
        
     

//Insert
static function insert($tablename,$value){
  $connectdb  = connectdb::getInstance();

  $conn = $connectdb->getConnection();

  $sql= "INSERT INTO $tablename VALUES ($value)";
  echo "sql command : $sql <br>";
   $q=mysqli_query($conn,$sql);
  if($q){
    return 1;
  }
  else{
  return 0;
  }
}




//Update
static public function update($tablename,$records,$idValue,$idName)
{

  $connectdb  = connectdb::getInstance();

  $conn = $connectdb->getConnection();
	$count = 1;
	foreach ($records as $key => $value) {
		echo "$key = $value <br>";
		
			$query = "UPDATE $tablename SET $key = $value where $idName=  $idValue";
			$result = mysqli_query($conn,$query);
      echo "<br> $query";
			//echo "<br> mysqli_affected_rows($conn)<br>";
		if($bool = mysqli_affected_rows($conn) >= 1)
			{$count = $count +1;


			}


	}

	if($count == sizeof($records))
	{
		return 1;
	}
	else {
		return 0;
	}

}
//End of class
}
?>