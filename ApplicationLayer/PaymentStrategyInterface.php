<?php 

//this to implement different payment strategies
	interface PaymentStrategy{
		public function pay($member_Id);
    }
    
?>