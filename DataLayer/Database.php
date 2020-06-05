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
	{
	//	echo "<br>"."Affected rows: " . mysqli_affected_rows($conn)."<br>";
		  	$arrayOfResult = mysqli_fetch_all( $result ,MYSQLI_ASSOC);
    } 
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
          return 1;
             } else {
              return 0 ; 
            }
                

            }
        
     

//Insert
static function insert($tablename,$value){
  $connectdb  = connectdb::getInstance();

  $conn = $connectdb->getConnection();

  $sql= "INSERT INTO $tablename VALUES ($value)";
//  echo "sql command : $sql <br>";
   $q=mysqli_query($conn,$sql);
  if($q){
    return 1;
  }
  else{
  return 0;
  }
}




//Update
static public function update($tablename,$records,$idName,$idValue)
{

  $connectdb  = connectdb::getInstance();

  $conn = $connectdb->getConnection();
	$count = 1;
	foreach ($records as $key => $value) {
	//	echo "$key = $value <br>";
		
			$query = "UPDATE $tablename SET $key = $value where $idName =  $idValue";
    //  echo "query to database $query <br>";
			$result = mysqli_query($conn,$query);
  //    echo "<br> $query <br>";
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



$object= new DataBase();


//Trials
/*

if(isset($_POST['update'])){

echo "working <br>";
 
	$arrayName  = array('Member_Fname'=>'hamada', 'Member_Lname'=>'bahaa', 'Member_email'=>'ehbd@sds','Member_password'=>'sdsd','MobileNumber'=> 1000);
	$object-> update(' member',$arrayName,' Member_id',1);
	$object-> selectRecord('member','Member_id',12);

}
  if(isset($_POST['insert'])){		
  	$id =5;
   $fname="ahmed";
   $lname="Ahmed";
   $email="rana@gmail.com";
   $pass="Rana12";
   $number=010;
   $string="$id,'$fname','$lname','$email','$pass',$number";
	
    $object-> insert('member',$string);

}

 if(isset($_POST['delete'])){
           
         $object->  deletefunction('member','Member_id',$_POST['id']);

        }    

    if(isset($_POST['selectAll'])){
     // $object= new jemy();

      echo "SelectAll";

    	print_r($object->selectAll('member'));

    }

    if(isset($_POST['selectRecord'])){

    	print_r($object->selectRecord('member','Member_id',1));

    }


 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Functions</title>

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <div class="contanier">

      <form action = "<?php echo $_SERVER['PHP_SELF'] ?> " method = "POST">

        
        <br>
         <label for="memberid">Member ID</label>
           <input type="number" name="id" value="enter member id" class="form-control" id="memberid">
        <input type="submit" name="insert" value="insert"class="btn brand z-depth-0">
        <input type="submit" name="update" value="update"class="btn brand z-depth-0">
        <input type="submit" name="delete" value="delete"class="btn brand z-depth-0">
        <input type="submit" name="selectRecord" value="select Record"class="btn brand z-depth-0">
        <input type="submit" name="selectAll" value="select All"  class="btn brand z-depth-0">

   </div>
 </head>
 <body>
 
 </body>
 </html>*/