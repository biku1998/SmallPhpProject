<?php
session_start();
if(!(isset($_SESSION['id']))){
    header('location:login.php');
}
$id=$_SESSION['id'];

require('fpdf.php');

require_once('connection.php');

$q=  mysqli_query($con, "SELECT * FROM student WHERE id=$id");

$arr=  mysqli_fetch_assoc($q);


class PDF extends FPDF
{
    function EventTable($game)
    {
        
        $this->Image('img/'.$game['profilepic'],10,15,30);
       
        
        $this->SetXY( 90, 35 );
        $this->SetFont('','B','24');
        $this->Cell(40,10,'Welcome '.$game['name'],15);
                
        
         $this->Ln();
        $this->SetFont('','B','24');
        $this->Cell(80,30,'Cetpa Infotect Pvt. Ltd.',15);
        $this->Ln();

        $this->Ln();
        $this->SetXY( 10, 45 );

        $this->SetFont('','B','10');
        $this->SetFillColor(128,128,128);
        $this->SetTextColor(200);
        $this->SetDrawColor(92,92,92);
        $this->SetLineWidth(.3);
        
        $this->SetXY( 10, 65 );
        $this->Cell(40,7,"Name",1,0,'C',true);
        $this->Cell(60,7,"Email",1,0,'C',true);
        $this->Cell(40,7,"Contact",1,0,'C',true);
        $this->Cell(20,7,"Course",1,0,'C',true);
        $this->Cell(20,7,"Fee",1,0,'C',true);
        $this->Ln();

        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('');

        $fill=FALSE;

        $this->SetFont('Times',((int)$game['name']>(int)$game['email'])?'BI':'');
        $this->Cell(40,6,$game['name'],'LR',0,'L',$fill);
        $this->Cell(60,6,$game['email'],'LR',0,'R',$fill);
        $this->SetFont('Times',((int)$game['contact']<(int)$game['course'])?'BI':'');
        $this->Cell(40,6,$game['contact'],'LR',0,'L',$fill);
        $this->Cell(20,6,$game['course'],'LR',0,'R',$fill);
		$this->SetFont('Times',((int)$game['contact']<(int)$game['course'])?'BI':'');
        $this->Cell(20,6,$game['fee'],'LR',0,'R',$fill);
        $this->Ln();

        $this->Cell(180,0,'','T');
        
    }
}

$pdf = new PDF();

$pdf->AddPage();

$pdf->SetFont('Arial','',48);


$pdf->EventTable($arr); 


$pdf->Output();

?>
