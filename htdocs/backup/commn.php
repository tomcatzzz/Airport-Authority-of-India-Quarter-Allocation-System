<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
} 

if (isset($_POST['submit'])) {
 
$empid = $_POST['empid'];
$noe = $_POST['name'];
$nof = $_POST['nof'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$Marital = $_POST['Marital'];
$nos = $_POST['nos'];
$AADHAAR = $_POST['aadhaar'];
$PAN = $_POST['pan'];
$emailid = $_POST['emailid'];
$mobileno = $_POST['mobileno'];



$service = $_POST['service'];
$padd = $_POST['padd'];
$designation = $_POST['designation'];
$dept = $_POST['dept'];
$groups = $_POST['groups'];
$dtemp = $_POST['dtemp'];
$dtret = $_POST['dtret'];
$dtpresent = $_POST['dtpresent'];
$eligible = $_POST['eligible'];
$hra = $_POST['hra'];
$servicest = $_POST['servicest'];
//$pays = $_POST['pays'];
$bpay = $_POST['bpay'];
//$entitlement = $_POST['entitlement'];



$padd = $_POST['padd'];
$oacc = $_POST['oacc'];
$loan = $_POST['loan'];
$gloan = $_POST['gloan'];



$sql = "INSERT INTO residential (padd,oacc,loan,gloan)
VALUES ('$padd','$oacc','$loan','$gloan')";


$sql = "INSERT INTO profile (user_id,name,father_name,dob,sex,marital,spouse_name,aadhaar,pan,email,mobile,service,padd,designation,dept,groups,dtemp,dtret,dtpresent,eligible,hra,servicest,bpay)
VALUES ('$empid','$noe','$nof','$dob','$sex','$Marital','$nos','$AADHAAR','$PAN','$emailid','$mobileno','$service','$padd','$designation','$dept','$groups','$dtemp','$dtret','$dtpresent','$eligible','$hra','$servicest','$bpay')";



if (!mysqli_query($conn,$sql)) {
       echo "Error: " .$sql. "<br>" .$conn->error;
} else {

     header('Location: http://localhost/output.php');  
}

/*$s1="if (reg.register.noe=official.official.service,"true","false") ";
if (!mysqli_query($conn,$s1))
echo "Already alloted";
else echo "good";*/
}

?>







<html>
<head>
<title>AIRPORT AUTHORITY OF INDIA</title>
</head>

	<center><img align="top" src="untitled.png" alt="Smiley face" height="250" width="250">
	<h1>AIRPORT AUTHORITY OF INDIA</h1>
	<h2>Quarter Allocation System</h2></center>
</head>
<body bgcolor="#ccffe6">
<table border="5" cellpadding="3" width="100%" align="center"
cellspacing="3">
  <tr>
    <td bgcolor="#42b3f4" ><center><font size="4"><b>REGISTRATION &#8595</b></center></font></center></td>
      <td bgcolor="#ff3333"><center><font size="4"><b>OFFICIAL DETAILS</b></center></font></center></td>
          <td bgcolor="#ff3333"><center><font size="4"><b>RESIDENTIAL DETAILS</b></center></font></center></td>

  </tr>


</table>
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

<form action="reg.php"  method="post">

<table border="1" cellpadding="3" width="80%" bgcolor="#ffff66" align="center"
cellspacing="12">

<tr>
<td colspan=2>
<center><font size=4><b>Registration Form</b></font></center>
</td>
</tr>
<br>

<tr>
<td><b>1) Employee id</b></td>
<td><input type=int name=empid  size="30">MAX_SIZE=30</td>
</tr>


<tr>
<td><b>2) Name of Employee</b></td>
<td><input type="text" name="name"  size="30">MAX_SIZE=30</td>
</tr>

<tr>
<td><b>3) Name of Father</b></td>
<td><input type="text" name="nof" 
size="30">MAX_SIZE=30</td>
</tr>

<tr>
<td><b>4) Date Of Birth</b></td>
<td><input type="text" name="dob" size="30">MAX_SIZE=30</td>
</tr>


<tr>
<td><b>5) Sex</b></td>
<td><input type="radio" name="sex" value="male" size="10">Male
<input type="radio" name="sex" value="Female" size="10">Female</td>
</tr>



<tr>
<td><b>6) Marital Status</b></td>
<td><select Name="Marital" id="status">
<option value="Married">Married</option>
<option value="Unmarried">Unmarried</option>
<option value="Widow">Widow</option>
<option value="Widower">Widower</option>
<option value="Divorcee">Divorcee</option>
</select></td>
</tr>  


<tr>
<td><b>7) Name of Spouse (if applicable)</b></td>
<td><input type="text" name="nos"  size="30" id="cond" onchange=>MAX_SIZE=30</td>
</tr>


<tr>
<td><b>6) Has your spouse been allotted a residence either  in Authority or Government or Semi-Government or another Public Sector Undertaking or Autinomous Body?   </b></td>
<td><input type="radio" name="echeck" value="yes" size="10" onclick="er()">Yes
<input type="radio" name="echeck" value="Female" size="10">No</td>
</tr>

<script>
  function er()
  {alert('You are not eligible! Please read the eligibility criteria mentioned in the previous page');}
</script>
<tr>
<td><b>7) AADHAAR CARD</b></td>
<td><input type="text" name="aadhaar" size="20">MAX_SIZE=20</td>
</tr>

<tr>
<td><b>8) PAN CARD</b></td>
<td><input type="text" name="pan"  size="10">MAX_SIZE=10</td>
</tr>

<tr>
<td><b>9) Email Id</b></td>
<td><input type="text" name="emailid"  size="30">MAX_SIZE=30</td>
</tr>



<tr>
<td><b>10) Mobile No.</b></td>
<td><input type="text" name="mobileno"  size="10">MAX_SIZE=10</td>
</tr>
</table>



<!--
<br>
<br>
<center><input type="reset" id="r1"/>

  <span style="display:inline-block; width: 50px;"></span>
<input id="s1" type="submit" value="Submit Form" name="submit"/>
</center>
<br>
<br>-->
</body>
</html>





<!--
<?php
$servername /*= "localhost";
$username = "root";
$password = "";
$dbname = "user";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
} 

if (isset($_POST['submit'])) {
  # code...

$service = $_POST['service'];
$padd = $_POST['padd'];
$designation = $_POST['designation'];
$dept = $_POST['dept'];
$groups = $_POST['groups'];
$dtemp = $_POST['dtemp'];
$dtret = $_POST['dtret'];
$dtpresent = $_POST['dtpresent'];
$eligible = $_POST['eligible'];
$hra = $_POST['hra'];
$servicest = $_POST['servicest'];
//$pays = $_POST['pays'];
$bpay = $_POST['bpay'];
//$entitlement = $_POST['entitlement'];


$sql = "INSERT INTO profile (service,padd,designation,dept,groups,dtemp,dtret,dtpresent,eligible,hra,servicest,bpay)
VALUES ('$service','$padd','$designation','$dept','$groups','$dtemp','$dtret','$dtpresent','$eligible','$hra','$servicest','$bpay')";

$sql1 = "SELECT * FROM official";

if (!mysqli_query($conn,$sql)) {
       echo "Error: " .$sql. "<br>" .$conn->error;
} else {

     header('Location: http://localhost/res.php');  
}

}
$conn->close();
*/?>-->





<html>
<head>
<title>AIRPORT AUTHORITY OF INDIA</title>
</head>


  <center><!--<img align="top" src="untitled.png" alt="Smiley face" height="250" width="250">
  <h1>AIRPORT AUTHORITY OF INDIA</h1>
  <h2>Quarter Allocation System</h2>
--></center>

<body bgcolor="#ccffe6">
  <table border="5" cellpadding="3" width="100%" align="center"
cellspacing="3">
  <tr>
    <td bgcolor="#33ff33" ><center><font size="4"><b>REGISTRATION &#10004</b></center></font></center></td>
      <td bgcolor="#42b3f4"><center><font size="4"><b>OFFICIAL DETAILS &#8595</b></center></font></center></td>
          <td bgcolor="#ff3333"><center><font size="4"><b>RESIDENTIAL DETAILS</b></center></font></center></td>

  </tr>
</table>
<br>
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




<table style="font-weight: bold; font-size: 18" border="1" cellpadding="3" width="80%" bgcolor="#ffcccc" align="center"
cellspacing="12">

<tr>
<td colspan=2>
<center><font size=4><b>OFFICIAL FORM</b></font></center>
</td>
</tr>

<tr>
<td>1) Service to which Official/Officer belong</td>
<td><input type=text name=service id="service" size="30"></td>
</tr>

<tr>
<td>2) Place of posting</td>
<td><input type="text" name="padd" id="padd"
size="30"></td>
</tr>
<tr>
<td>3) Designation</td>
<td><input type="text" name="designation" id="designation" size="30"></td>
</tr>


<tr>
<td>4) Department</td>
<!--<td><input type="text" name="dept" id="dept" size="30"></td>
-->
<td><select name="Department" id=Dept>
  <option value="CNS">CNS</option>

</select></td>
</tr>

<!--<tr>
<td>5) Groups</td>
<td><input type="text" name="groups" id="groups" size="30"></td>
</tr>
-->
<tr>
<td>5) Date from which continuously employed in govt. service</td>
<td><input type="text" name="dtemp" id="dtemp" size="30"></td>
</tr>

<tr>
<td>6) Date of Superannuation/Retirement</td>
<td><input type="text" name="dtret" id="dtret" size="30"></td>
</tr>

<tr>
<td>7) Date from which continuously posted in the Delhi</td>
<td><input type="text" name="dtpresent" id="dtpresent" size="30"></td>
</tr>

<tr>
<td>8) Whether posted at NER, Leh, Srinagar, Port Blair or Agatti Airport?</td>
<td><input type="radio" name="yposting" value="yposting" size="10">Yes


<input type="radio" name="nposting" id="nposting" value="No" size="10">No</td>
</tr>

<tr>
  <td>9) If Yes, then provide the dates from __ to __ ; If No, Leave this field empty</td>
  <td><input type="text" name="dtyposting" id="dtyposting">
</td>

</tr>
<tr>
<td>9) Eligible for rent free accomodation</td>
<td><input type="text" name="eligible" id="eligible" size="30"></td>
</tr>
<tr>
<td>10) Entitled for HRA</td>
<td><input type="text" name="hra" id="hra" size="30"></td>
</tr>
<tr>
<td>11) Service Status</td>
<td><input type="text" name="servicest" id="servicest" size="30"></td>
</tr>
<tr>
<!--<td>12) Pay Scale</td>
<td><input type="text" name="pays" id="pays" size="30"></td>
</tr>-->
<tr>
<td>13) Old Pay (without dearness pay)</td>
<td><select Name="bpay">
<option value="10200 - 12749">10200 - 12749</option>
<option value="10200 - 12749">10200 - 12749</option>
<option value="12750 - 17379">12750 - 17379</option>
<option value="17380 - 33599">17380 - 33599</option>
<option value="33600 - 40549">33600 - 40549</option>
<option value="33600 - 40549">33600 - 40549</option>
<option value="40550 - 55019">40550 - 55019</option>
<option value="55020 & above">55020 & above</option>
</select></td>
</tr>

<!--
<tr>
<td><b>14) Entitlement of Accomodation</b></td>
<td><select Name="entitlement">
<option value="A1">A1 :10200 - 12749</option>
<option value="A2">A2 :10200 - 12749</option>
<option value="B1">B1 :12750 - 17379</option>
<option value="B2">B2 :17380 - 33599</option>
<option value="C1">C1 :33600 - 40549</option>
<option value="C2">C2 :33600 - 40549</option>
<option value="D">D :40550 - 55019</option>
<option value="E">E :55020 & above</option>
</select></td>
</tr>  -->
</table>
<!--
<br>
<br>
<center><input type="reset" id="r1"/>

  <span style="display:inline-block; width: 50px;"></span>
<input id="s1" type="submit" value="Submit Form" name="submit"/>
</center>
<br>
<br>
-->


<br>
<br>
</body>
</html>


<!--?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
} 

if (isset($_POST['submit'])) {
  # code...

$padd = $_POST['padd'];
$oacc = $_POST['oacc'];
$loan = $_POST['loan'];
$gloan = $_POST['gloan'];



$sql = "INSERT INTO residential (padd,oacc,loan,gloan)
VALUES ('$padd','$oacc','$loan','$gloan')";

if (!mysqli_query($conn,$sql)) {
       echo "Error: " .$sql. "<br>" .$conn->error;
} else {

     header('Location: http://localhost/output.php');  
}

}
$conn->close();
?>-->








<html>
<head>
<title>RESIDENTIAL</title>
</head>
<center><!--<img class="centerImage"src="untitled.png" alt="Smiley face" height="250" width="250">
  <h1>AIRPORT AUTHORITY OF INDIA</h1>
  <h2>WELCOME</h2>
  <h2>Quarter Allocation System</h2>
--></center>


<table border="5" cellpadding="3" width="100%" align="center"
cellspacing="3">
  <tr>
    <td bgcolor="#33ff33" ><center><font size="4"><b>REGISTRATION &#10004</b></center></font></center></td>
      <td bgcolor="#33ff33"><center><font size="4"><b>OFFICIAL DETAILS &#10004</b></center></font></center></td>
          <td bgcolor="#42b3f4"><center><font size="4"><b>RESIDENTIAL DETAILS &#8595</b></center></font></center></td>

  </tr>
</table>
<br>
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


<body bgcolor="#ccffe6">
<table style="font-weight: bold; font-size: 18" border="1" cellpadding="3" width="80%" bgcolor="#ffcccc" align="center"
cellspacing="12">

<tr>
<td colspan=2>
<center><font size=4><b>RESIDENTIAL FORM</b></font></center>
</td>
</tr>



<tr>
<td>1) Present Residential Address</td>
<td><input type=text name=padd size="30"></td>
</tr>

<!--<tr>
<td>2) Are you or or spouse occupying accomadation alloted by any departmental or any other pool</td>
<td><input type="radio" name="oacc" value="yes" size="10">YES
<input type="radio" name="oacc" value="no" size="10">NO</td>
</tr> -->


<tr>
<td>3) Sanctioned housing / building loan?</td>
<td><input type="radio" name="loan" value="yes" size="10">YES
<input type="radio" name="loan" value="no" size="10">NO</td>
</tr>
<tr>
<td>4) Whether applied for housing loan from any other source other than govt.?</td>
<td><input type="radio" name="gloan" value="yes" size="10">YES
<input type="radio" name="gloan" value="no" size="10">NO</td>
</tr>
</table>


<table style="font-weight: bold; font-size: 18" border="1" cellpadding="3" width="80%" bgcolor="#ffcccc" align="center"
cellspacing="12">

<tr>
<td colspan=2>
<center><font size=4><b>UNDERTAKING</b></font></center>
</td>
<tr>
<td colspan="2">
  <center><font size="3">The following details are mentioned about the posession of a house by the employee/employee's spouse/dependents in Delhi or N.C.R </font></center>
</td></tr>
<tr>
<td>1) Wheteher you/your spouse/your dependents own a house obtained by housing/building loan or loan from any other source other than the government?</td>
<td><input type="radio" name="hra1y" id="hra1y" value="Yes" size="10">
Yes<input type="radio" name="hra1n" id="hra1n" value="No" size="10">No</td>
</tr>

<tr>
<td>2) If yes, then specify the complete address of the owned house along with pin code </td>
<td><input type="text" name="hra" id="hra" size="30"></td>
</tr>

<tr>
<td>3) Date of possesion of the said house </td>
<td><input type="text" name="hra" id="hra" size="30"></td>
</tr>

<tr>
<td>3) Distance of the said house from the place of posting of the employee</td>
<td><input type="text" name="hra" id="hra" size="30"></td>
</tr>

<tr>
<td>4) Wheteher your spouse is employed ?</td>
<td><input type="radio" name="hra2y" value="Yes" id="hra2y" size="10">Yes
<input type="radio" name="hra2n" value="No" id="hra2n" size="10">No

</tr>

<tr>
<td>5) If yes, then specify the place of employment</td>
<td><input type="text" name="hra" id="hra" size="30"></td>
</tr>

<tr>
<td>6) If employed, whether the place of employment is a Government or Semi-Government or another Public Sector Undertaking or Autinomous Body?</td>
<td><input type="text" name="hra" id="hra" size="30"></td>
</tr>




</table>

<br>
<br>
<center><input type="reset" id="r1"/>

  <span style="display:inline-block; width: 50px;"></span>
<input id="s1" type="submit" value="Submit Form" name="submit"/>
</center>
<br>
<br>
</body>
</html>
