<?php 
include('PaymentStrategyInterface.php');
include('../DataLayer/Database.php');

//PayPal Payment Strategy 
	class PayPalStrategy implements PaymentStrategy{

	    /*private String $email;
	    private String $password;
		
	    //constructor
		public function __construct($activeEmail,$activePassword){
		    $this->email = $activeEmail;
			$this->password = $activePassword;
	    }*/
		
	    //overrides the pay method in the PaymentStrategy interface
	    public function pay($member_Id){
			$db = new DataBase(); 
            $option = "PayPal";
 	        $TableName="transaction_log(Member_id,Payment_Method)";
 	        $Values = "'$member_Id','$option'";
 	        $db -> insert($TableName,$Values);
			
	    }
    }