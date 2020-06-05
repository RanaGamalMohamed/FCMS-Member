<?php 

include ('Observer.php');


//include ('../DataLayer/Database.php');
//require('FpdfLibrary/fpdf.php');
include('PDF.php');

class Member implements Observer 
{
	public $id ;
	public function __construct($id)
	{
		$this->id = $id;
	}
	public function update()
	{
		echo "i am observer $this->id"."<br>";
	}




}
class Admin implements Subject
{
	 protected $observers = [];
	public $id;
	public function __construct($id)
	{
		$this->id = $id;
	}
	public function addObserver( Observer $newObserver)
	{
		array_push($this->observers, $newObserver);
		echo "admin added Observer $newObserver->id"."<br>";
	}

	public function deleteObserver( Observer $removedObserver)
	{
		    $key = array_search($removedObserver, $this->observers);

		    unset($this->observers[$key]);
		   echo "admin deleted Observer $removedObserver->id"."<br>";


	}
	public function notify()
	{
		foreach ($this->observers as $observer) 
		{
			# code...	
			# code...
			$observer->update();
		}

	}

	public function addPakcage($packageDetails)
	{
		$package;
		$package = implode(",", $packageDetails);
		echo "<br>$package <br>";
		if(Database::insert("packages",$package))
		{
			echo "Done";
		}
		else
		{
			echo "ERROR";
		}

	}


	public function updatePackage($packageDetails,$packageId)
	{
		$package =  array(' Package_duration ' => $packageDetails[0],' Beginning_date '=>"'$packageDetails[1]'",' End_date '=>"'$packageDetails[2]'",' Package_fee '=>$packageDetails[3],' Admin_id '=>$packageDetails[4] );
		Database::update("packages",$package,'Package_id',$packageId);
		//echo "'$packageDetails[1]'";	
	}

	public function updateSession($sessionDetails,$sessionId)
	{
		$session =  array(' Session_name ' => " '$sessionDetails[0]' ",' Session_cost '=>$sessionDetails[1],' discount '=>$sessionDetails[2],' Start_time '=>" '$sessionDetails[3]' ",' End_time '=>"'$sessionDetails[4]'",' Session_days '=>"'$sessionDetails[5]'",' Session_goal '=>"'$sessionDetails[6]'",' Trainer_name '=>" '$sessionDetails[7]'" );
		Database::update("sessions",$session,'Session_id',$sessionId);
	}

		public function updateMember($memberDetails,$memberId)
	{
		$member =  array(' Member_Fname ' => "'$memberDetails[0]'",' Member_Lname '=>" '$memberDetails[1]' ",' Member_email '=>" '$memberDetails[2] '",'Member_password '=>" '$memberDetails[3]' ",' MobileNumber '=> " '$memberDetails[4]' ");
		echo "mobile phone is $memberDetails[4]<br>";
		Database::update("member",$member,' Member_id ',$memberId);
	}

		public function updateTrainer($trainerDetails,$trainerId)
	{
		//you need '' surround string variable that's why " '' " is used
		$trainer =  array(' Trainer_Fname ' => "'$trainerDetails[0]'",' Trainer_Lname ' => " '$trainerDetails[1]' ", 'Trainer_email ' =>"'$trainerDetails[2]'" , 'Trainer_password '=> "'$trainerDetails[3]'",'Trainer_salary '=>$trainerDetails[4],'Hired_Date'=>" '$trainerDetails[5]' ",' Shifts ' => " '$trainerDetails[6] '");

		Database::update("trainer",$trainer,' Trainer_id ',$trainerId);
	}

	public function generatePdf()
	{
		$pdf = new pdf();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->headerTable();
		$pdf->viewTable();
		$pdf->Output();


	}
	
}

/*
	$admin = new Admin(10);
	 $member = new Member(1);
	
	 $member2 = new Member(2);
	
	 $member3 = new Member(3);
	 	//$admin->generatePdf();


	$admin->addObserver($member);

	$admin->addObserver($member2);

	$admin->addObserver($member3);

	$admin->notify();
	$admin->deleteObserver($member2);
	$admin->notify();
	*/
/*	$package  = array(10,10,10,10,10,1);
//	$admin->updatePackage($package,10);
	$member  = array('ahmed','mohamed','ahmed@20180026','2000','01000');
	$session  = array( 'updatedZomba',200,20,'11 pm updated','12 pm ',4,'spa updated','Mike tayson');
	$trainer  = array('ahmed','mohamed','ahmed@20180026','pass_',2000,'21-5-2020','from 10 to 10');

	$admin = new Admin(10);
	//$admin->updatePackage($package,10);
	//$admin->updateTrainer($trainer,13);
	$admin->updateSession($session,2);
	//$admin->updateMember($member,5);
*/
?>