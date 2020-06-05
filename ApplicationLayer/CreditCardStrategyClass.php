<?php 
include ('CreditCardClass.php');
include('PaymentStrategyInterface.php');
include_once('../DataLayer/Database.php');


//CreditCard Payment Strategy
	class CreditCardStrategy extends CreditCard implements PaymentStrategy{
	
		
	    //overrides the pay method in the PaymentStrategy interface
	    public function pay($memebr_Id){
			$db = new DataBase(); 
            $option = "Credit Card";
 	        $TableName="transaction_log(Member_id,Payment_Method)";
 	        $Values = "'$member_Id','$option'";
 	        $db -> insert($TableName,$Values);
			
	    }
    }
    
    
?>