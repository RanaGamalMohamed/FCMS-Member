<?php 
//class to hold card details whenever needed 
include('../DataLayer/Database.php');
class creditCard{
	
	private $cardNumber;
	private $securityDigits;
	private $expiryDate;
	
	
	//Constructor
        function __construct($cName,$cNumber,$cExpiryDate){
			$this->name = $cName;
			$this->cardNumber = $cNumber;
			$this->expiryDate = $cExpiryDate;
        }
	
}
?>