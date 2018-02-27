<?php
require('fpdf.php');
require_once('connection.php');
session_start();
$id=$_SESSION['id'];
$q=  mysqli_query($con, "SELECT * FROM student where id='$id'");
$num=  mysqli_num_rows($q);

$arr=  mysqli_fetch_assoc($q);

var_dump($arr);

class PDF extends FPDF
{
    function EventTable($event)
    {
        
    $this->Image('cet.jpg',15,15,50);

    $this->SetXY( 70, 10 );

    $this->SetFont('','B','24');
    $this->Cell(70,30,'Red Cross Blood Bank',15);
    $this->Ln();

    $this->SetXY( 10, 45 );

    $this->SetFont('','B','10');
    $this->SetFillColor(128,128,128);
    $this->SetTextColor(255);
    $this->SetDrawColor(92,92,92);
    $this->SetLineWidth(.3);

    $this->Cell(70,7,"Blood Group",1,0,'C',true);
    $this->Cell(20,7,"Stock",1,0,'C',true);
    $this->Cell(70,7,"Description",1,0,'C',true);
	
    $this->Ln();

    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');

    $fill = false;
    
    $i=0;
    while($i<$GLOBALS['num']){
        foreach($event[$i] as $game)
        {
          $this->SetFont('Times',((int)$game['name']>(int)$game['stock'])?'BI':'');
          $this->Cell(70,6,$game['name'],'LR',0,'L',$fill);
          $this->Cell(20,6,$game['stock'],'LR',0,'R',$fill);
          $this->SetFont('Times',((int)$game['description']<(int)$game['description'])?'BI':'');
          $this->Cell(70,6,$game['description'],'LR',0,'L',$fill);
        
          
          $this->Ln();
          $fill =! $fill;

        }
        $i++;
    }
    $this->Cell(160,0,'','T');
        
    }
}

$pdf = new PDF();

$pdf->AddPage();
$pdf->SetFont('Arial','',48);

$pdf->EventTable($arr); 


$pdf->Output();

?>
