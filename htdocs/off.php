<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "official";


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
$pays = $_POST['pays'];
$bpay = $_POST['bpay'];
$entitlement = $_POST['entitlement'];


$sql = "INSERT INTO official (service,padd,designation,dept,groups,dtemp,dtret,dtpresent,eligible,hra,servicest,pays,bpay,entitlement)
VALUES ('$service','$padd','$designation','$dept','$groups','$dtemp','$dtret','$dtpresent','$eligible','$hra','$servicest','$pays','$bpay','$entitlement')";

$sql1 = "SELECT * FROM official";

if (!mysqli_query($conn,$sql)) {
       echo "Error: " .$sql. "<br>" .$conn->error;
} else {

     header('Location: http://localhost/res.php');  
}

}
$conn->close();
?>





<html>
<head>
<title>AIRPORT AUTHORITY OF INDIA</title>
</head>


	<center><img align="top" src="untitled.png" alt="Smiley face" height="250" width="250">
	<h1>AIRPORT AUTHORITY OF INDIA</h1>
	<h2>Quarter Allocation System</h2>
</center>

<body bgcolor="#ccffe6">
	<table border="5" cellpadding="3" width="100%" align="center"
cellspacing="3">
  <tr>
    <td bgcolor="#33ff33" ><center><font size="4"><b>REGISTRATION</b></center></font></center></td>
      <td bgcolor="#42b3f4"><center><font size="4"><b>OFFICIAL DETAILS</b></center></font></center></td>
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


<form action="off.php" method="post">

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
<td>2) Present Address</td>
<td><input type="text" name="padd" id="padd"
size="30"></td>
</tr>
<tr>
<td>3) Designation</td>
<td><input type="text" name="designation" id="designation" size="30"></td>
</tr>


<tr>
<td>4) Department</td>
<td><input type="text" name="dept" id="dept" size="30"></td>
</tr>

<tr>
<td>5) Groups</td>
<td><input type="text" name="groups" id="groups" size="30"></td>
</tr>

<tr>
<td>6) Date from which continuously employed in govt. service</td>
<td><input type="text" name="dtemp" id="dtemp" size="30"></td>
</tr>

<tr>
<td>7) Date of Superannuation/Retirement</td>
<td><input type="text" name="dtret" id="dtret" size="30"></td>
</tr>

<tr>
<td>8) Date from which continuously posted in the present city</td>
<td><input type="text" name="dtpresent" id="dtpresent" size="30"></td>
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
<td>12) Pay Scale</td>
<td><input type="text" name="pays" id="pays" size="30"></td>
</tr>
<tr>
<td>13) Basic Pay</td>
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


</form> 
<br>
<br>
</body>
</html>
