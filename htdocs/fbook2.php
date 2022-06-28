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


if(isset($_POST['regid'])){

  $regid=$_POST['regid'];
  $empid=$_POST['empid'];

  $sql="select * from profile where regid='".$regid."'AND user_id='".$empid."'limit 1";
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
}}}
?>




<html>
<head>
<title>AIRPORTS AUTHORITY OF INDIA</title>
</head>
 
  
<body>
  <div class="container group">
    <div class="grid-1-5">
  <center><img class="centerImage"src="untitled.png" alt="Smiley face" height="250" width="250">
  
  <h1><font color="#cc0000">AIRPORTS AUTHORITY OF INDIA</font></h1>
  <h1><font color="#ff6600">WELCOME</font></h1>
  <h1><font color="#ff6600">Quarter Allocation System</font></h1>
 
</center>

</div>
</div>


<br>
<br>
<style type="text/css">
  #r1{
     background-color: #ff1a1a; 
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }

    #s1{
     background-color: #009933; 
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }


</style>

  <link rel="stylesheet" type="text/css" href="login1.css">
  <div class="container group">
    <div class="grid-1-5">
  
      
<form name="loginForm" method="post" action="#">
<table  border="5"  width="50%" bgcolor="#99ff66"align="center" cellpadding="12" >

<tr>
<td colspan="4"><center><font size=4><b>HR LOGIN</b></font></center></td>
</tr>
<br>
<tr>
<td><b>REGISTRAION ID :  </b></td>

<td><input type="text" size=25 name="regid">  </td>
</tr>
<br>
<tr>
<td ><b>EMPLOYEEE ID :  </b></td>

<td><input type="Password" size=25 name="empid">  </td>
</tr>
<br>
</table>
<br>
<br>
<center>
<input id="r1" type="Reset" class="button" >
<span style="display:inline-block; width: 150px;"></span>
<input id="s1" class="button" type="submit" onclick="return check(this.form)" value="CHECK">

<span style="display:inline-block; width: 150px;"></span>
<input id="s1" class="button" onclick="window.location.href='remarks.php'" value="VERIFY">



</center>





    
    </form>


    </div>
        
  </div>
  





  <br>
<br>

<center><div id="button"><a href="login2.php"style="color: white"><b>CLICK HERE TO GO TO HOME</b></a></div>
</center>
<br>






<center><h3><font color="#cc0000">For any info regarding application form or login details, please contact : commn@aai.aero</font></h3></center>
<br>
<br>
</body>
</html>
