<?php 
require('FpdfLibrary/fpdf.php');


include('../DataLayer/Database.php');

class pdf extends FPDF
{

function Header()
{
	$this->SetFont('Arial','B',18);
	$this->Cell(180,5,'Package Report',0,0,'C');
	$this->Ln(10);


}
function Footer()
{
	 // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
// Load data
function headerTable()
{
	$this->SetFont('Arial','B',12);
	$this->Cell(10,10,'ID',1,0,'C');
	$this->Cell(30,10,'Duration',1,0,'C');
	$this->Cell(40,10,'Begining Date',1,0,'C');
	$this->Cell(30,10,'End Date',1,0,'C');
	$this->Cell(40,10,'Package Fee',1,0,'C');
	$this->Cell(40,10,'Creator Admin',1,0,'C');
	$this->Ln();
	//$this->Cell(20,10,'ID',1,0,'C');

}

function viewTable()
{
	$db = new Database();

	$stat = $db->selectAll("packages");
	foreach ($stat as $key => $value) 
	{
		
		$this->Cell(10,10,"$value[Package_id]",1,0,'L');
		$this->Cell(30,10,"$value[Package_duration]",1,0,'L');
		$this->Cell(40,10,"$value[Beginning_date]",1,0,'L');
		$this->Cell(30,10,"$value[End_date]",1,0,'L');
		$this->Cell(40,10,"$value[Package_fee]",1,0,'L');
		$this->Cell(40,10,"$value[Admin_id]",1,0,'L');
		$this->Ln();
	}
}
//end class
}


 ?>