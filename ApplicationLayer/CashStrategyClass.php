<?php 
include('../DataLayer/Database.php');
include('PaymentStrategyInterface.php');

//Cash Payment Strategy
	class CashStrategy implements PaymentStrategy{


	    //overrides the pay method in the PaymentStrategy interface
	    function pay($memebr_Id){
			$db = new DataBase(); 
            $option = "Cash";
 	        $TableName="transaction_log(Member_id,Payment_Method)";
 	        $Values = "'$member_Id','$option'";
 	        $db -> insert($TableName,$Values);
	
	    }
    }
    
?>