<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





$sql = "SELECT * FROM profile";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $noe=$row['name'];
      $empid=$row['user_id'];
      $nof=$row['father_name'];
      $dob=$row['dob'];
      $sex=$row['sex'];
      $marital=$row['marital'];
      $spouse_name=$row['spouse_name'];
      $aadhaar=$row['aadhaar'];
      $pan=$row['pan'];
      $email=$row['email'];
      $mobile=$row['mobile'];
      $service=$row['service'];
      $padd=$row['padd'];
      $designation=$row['designation'];
      $dept=$row['dept'];
      $groups=$row['groups'];
      $dtemp=$row['dtemp'];
      $dtret=$row['dtret'];
      $dtpresent=$row['dtpresent'];
      $eligible=$row['eligible'];
      $hra=$row['hra'];
      $servicest=$row['servicest'];
      $bpay=$row['bpay'];


}


}

require 'fpdf/fpdf.php';
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(170,10," --  WELCOME! -- {$noe}    ",1,1);
$pdf->Cell(70,10,"EMPLOYEE ID :",1,0); 
$pdf->Cell(100,10,$empid,1,1);
$pdf->Cell(70,10,"FATHER'S NAME :",1,0);
$pdf->Cell(100,10,$nof,1,1);
$pdf->Cell(70,10,"DATE OF BIRTH :",1,0);
$pdf->Cell(100,10,$dob,1,1);
$pdf->Cell(70,10,"SEX :",1,0); 
$pdf->Cell(100,10,$sex,1,1);
$pdf->Cell(70,10,"MARITAL :",1,0); 
$pdf->Cell(100,10,$marital,1,1);
$pdf->Cell(70,10,"SPOUSE'S NAME :",1,0); 
$pdf->Cell(100,10,$spouse_name,1,1);
$pdf->Cell(70,10,"AADHAAR :",1,0); 
$pdf->Cell(100,10,$aadhaar,1,1);
$pdf->Cell(70,10,"PAN :",1,0); 
$pdf->Cell(100,10,$pan,1,1);
$pdf->Cell(70,10,"EMAIL :",1,0); 
$pdf->Cell(100,10,$email,1,1);
$pdf->Cell(70,10,"MOBILE :",1,0); 
$pdf->Cell(100,10,$mobile,1,1);
$pdf->Cell(70,10,"SERVICE :",1,0); 
$pdf->Cell(100,10,$service,1,1);
$pdf->Cell(70,10,"PRESENT ADDRESS :",1,0); 
$pdf->Cell(100,10,$padd,1,1);
$pdf->Cell(70,10,"DESIGNATION :",1,0); 
$pdf->Cell(100,10,$designation,1,1);
$pdf->Cell(70,10,"DEPARTMENT :",1,0); 
$pdf->Cell(100,10,$dept,1,1);
$pdf->Cell(70,10,"GROUP :",1,0); 
$pdf->Cell(100,10,$groups,1,1);
$pdf->Cell(70,10,"EMPLOYED DATE :",1,0); 
$pdf->Cell(100,10,$dtemp,1,1);
$pdf->Cell(70,10,"RETIREMENT DATE :",1,0); 
$pdf->Cell(100,10,$dtret,1,1);
$pdf->Cell(70,10,"POSTED DATE :",1,0); 
$pdf->Cell(100,10,$dtpresent,1,1);
$pdf->Cell(70,10,"ELIGIBLE :",1,0); 
$pdf->Cell(100,10,$eligible,1,1);
$pdf->Cell(70,10,"HRA :",1,0); 
$pdf->Cell(100,10,$hra,1,1);
$pdf->Cell(70,10,"SERVICE STATUS :",1,0); 
$pdf->Cell(100,10,$servicest,1,1);
$pdf->Cell(70,10,"BASIC PAY :",1,0); 
$pdf->Cell(100,10,$bpay,1,1);



$pdf->Output();
?>



